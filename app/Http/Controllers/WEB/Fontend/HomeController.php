<?php

namespace App\Http\Controllers\WEB\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Slider;
use App\Models\category;
use App\Models\product;
use App\Models\Partner;
use App\Models\CraftingProcess;
use App\Models\Faq;
use App\Models\FaqImages;
use App\Models\testimonial;
use App\Models\blog;
use App\Models\MobileApp;
use App\Models\SectionTitel;
use App\Models\about_us;
use App\Models\contact_page;
use App\Models\ProductGallery;
use App\Models\subscriber;
use App\Models\contact_message;
use App\Models\Review;
use App\Models\setting;
use App\Models\User;
use App\Models\blog_comment;
use App\Models\razorpay_payment;
use App\Models\paystack;
use App\Models\flutterwave;
use App\Models\seo_setting;
use App\Models\LangMessage;
use App\Models\terms_and_condition;


use Validator;
use Auth;

class HomeController extends Controller
{
    public function setLanguage($lang_code){
        Session::put('front_lang', $lang_code);
        return redirect()->back();

    }

    public function index(){
        $data['setting'] =  setting::first();
        if($data['setting']->theam == 1){
            $data['LangMessage'] =  LangMessage::first();
            $data['seo_setting'] =  seo_setting::where('id',1)->first();
            $data['slider'] = Slider::first();
            $data['categories'] = Category::where('status', 'active')->take(10)->get();
            $data['Allcategories'] = Category::where('status', 'active')->get();
            $data['product'] = product::where('status', 'active')->take(15)->get();
            $data['product2'] = product::where('status', 'active')->take(6)->get();
            $data['promotions'] = Partner::orderBy('id','DESC')->get();
            $data['crafting'] =  CraftingProcess::first();
            $data['faqs'] =  Faq::where('status', 'active')->orderBy('id','DESC')->paginate(4);
            $data['faqAbout'] =  FaqImages::first();
            $data['testimonials'] =  testimonial::where('status', 'active')->paginate(10);
            $data['blogs'] = blog::where('status', 'active')->get();
            $data['app'] =  MobileApp::first();
            $data['section'] =  SectionTitel::first();
            return view('Fontend.Pages.index',$data);
        }
        else{
             $data['LangMessage'] =  LangMessage::first();
             $data['seo_setting'] =  seo_setting::where('id',1)->first();
             $data['slider'] = Slider::first();
             $data['categories'] = Category::where('status', 'active')->take(10)->get();
             $data['Allcategories'] = Category::where('status', 'active')->get();
             $data['product'] = product::where('status', 'active')->take(15)->get();
             $data['product2'] = product::where('status', 'active')->take(6)->get();
             $data['promotions'] = Partner::orderBy('id','DESC')->get();
             $data['crafting'] =  CraftingProcess::first();
             $data['faqs'] =  Faq::where('status', 'active')->orderBy('id','DESC')->paginate(4);
             $data['faqAbout'] =  FaqImages::first();
             $data['testimonials'] =  testimonial::where('status', 'active')->paginate(10);
             $data['blogs'] = blog::where('status', 'active')->get();
             $data['app'] =  MobileApp::first();
             $data['section'] =  SectionTitel::first();
             return view('Fontend.Pages.index2',$data);
        }
       
    }

    public function menu(){
        $data['LangMessage'] =  LangMessage::first();
        $data['seo_setting'] =  seo_setting::where('id',2)->first();
        $data['setting'] =  setting::first();
        $data['product'] = product::where('status', 'active')->take(9)->get();
        $data['product2'] = product::where('status', 'active')->take(12)->get();
        $data['faqs'] =  Faq::where('status', 'active')->orderBy('id','DESC')->paginate(4);
        $data['Allcategories'] = Category::where('status', 'active')->get();
        $data['faqAbout'] =  FaqImages::first();
        $data['app'] =  MobileApp::first();
        return view('Fontend.Pages.menu',$data);
    }

    public function search(Request $request){
       $categoryId = $request->input('category');
       $keyword = $request->input('keyword');
        
        $query = product::query();;

        if ($categoryId) {
            $query->orWhere('category_id', $categoryId);
        }
        
        if ($keyword) {
            $query->orWhere('slug', 'like', "%$keyword%")
            ->orWhere('seo_titel', 'like', "%$keyword%")
            ->orWhere('seo_description', 'like', "%$keyword%")
            ->orWhere('status', '=', 'active');
        }

        
        $products = $query->get();
        if($products->count() == 0 ){
            $message = "Not Found Any Result";
            $notification = ['message' => $message, 'alert-type' => 'info'];
            return redirect()->back()->with($notification);
        }else{
            $data['LangMessage'] =  LangMessage::first();
            $data['product'] = $products;
            $data['product2'] = $products;
            $data['seo_setting'] =  seo_setting::where('id',2)->first();
            $data['setting'] =  setting::first();
            $data['faqs'] =  Faq::where('status', 'active')->orderBy('id','DESC')->paginate(4);
            $data['Allcategories'] = Category::where('status', 'active')->get();
            $data['faqAbout'] =  FaqImages::first();
            $data['app'] =  MobileApp::first();
            return view('Fontend.Pages.menu',$data);
        }
    }

    public function categoyWise($id){
        $data['LangMessage'] =  LangMessage::first();
        $data['seo_setting'] =  seo_setting::where('id',2)->first();
        $data['setting'] =  setting::first();
        $data['product'] = product::where('category_id',$id)->where('status', 'active')->take(9)->get();
        $data['product2'] = product::where('category_id',$id)->where('status', 'active')->take(12)->get();
        $data['faqs'] =  Faq::where('status', 'active')->orderBy('id','DESC')->paginate(4);
        $data['Allcategories'] = Category::where('status', 'active')->get();
        $data['faqAbout'] =  FaqImages::first();
        $data['app'] =  MobileApp::first();
        return view('Fontend.Pages.menu',$data);
    }

    public function menuDetils($slug){
        $data['LangMessage'] =  LangMessage::first();
        $data['app'] =  MobileApp::first();
        $data['section'] =  SectionTitel::first();
        $data['product'] = product::where('status','active')->where('slug',$slug)->first();
        $data['galleries'] = ProductGallery::orderBy('id','DESC')->where('product_id',$data['product']->id)->get();
        $data['promotions'] = Partner::orderBy('id','DESC')->paginate(4);
        $data['reviews'] = Review::where('status',1)->where('product_id',$data['product']->id)->orderBy('id','DESC')->get();
        $data['setting'] =  setting::first();
        return view('Fontend.Pages.manue_detils',$data);
    }

    public function about(){
        $data['LangMessage'] =  LangMessage::first();
        $data['seo_setting'] =  seo_setting::where('id',3)->first();
        $data['setting'] =  setting::first();
        $data['app'] =  MobileApp::first();
        $data['section'] =  SectionTitel::first();
        $data['faqs'] =  Faq::where('status', 'active')->orderBy('id','DESC')->paginate(4);
        $data['faqAbout'] =  FaqImages::first();
        $data['testimonials'] =  testimonial::where('status', 'active')->get();
        $data['product'] = product::where('status', 'active')->where('is_populer',1)->get();

        $data['crafting'] =  CraftingProcess::first();
        $data['about_us'] =  about_us::first();

        return view('Fontend.Pages.about',$data);
    }

    public function contact(){
        $data['LangMessage'] =  LangMessage::first();
        $data['seo_setting'] =  seo_setting::where('id',6)->first();
        $data['setting'] =  setting::first();
        $data['app'] =  MobileApp::first();
        $data['section'] =  SectionTitel::first();
        $data['faqs'] =  Faq::where('status', 'active')->orderBy('id','DESC')->paginate(4);
        $data['faqAbout'] =  FaqImages::first();
        $data['contactus'] = contact_page::first();
        return view('Fontend.Pages.contact',$data);
    }

    public function blog(){
        $data['LangMessage'] =  LangMessage::first();
        $data['seo_setting'] =  seo_setting::where('id',9)->first();
        $data['setting'] =  setting::first();
        $data['app'] =  MobileApp::first();
        $data['section'] =  SectionTitel::first();
        $data['faqs'] =  Faq::where('status', 'active')->orderBy('id','DESC')->paginate(4);
        $data['faqAbout'] =  FaqImages::first();
        $data['blogs'] = blog::where('status', 'active')->get();
        return view('Fontend.Pages.blog',$data);
    }

    public function blogDetils($slug){
        $data['LangMessage'] =  LangMessage::first();
        $data['app'] =  MobileApp::first();
        $data['section'] =  SectionTitel::first();
        $data['faqs'] =  Faq::where('status', 'active')->orderBy('id','DESC')->paginate(4);
        $data['faqAbout'] =  FaqImages::first();
        $data['blog'] = blog::where('status', 'active')->where('slug',$slug)->first();
        $data['blogs'] =  blog::where('status', 'active')->orderBy('id','DESC')->paginate(4);
        $data['promotions'] = Partner::orderBy('id','DESC')->orderBy('id','DESC')->paginate(4);
        $data['comment'] = blog_comment::where('status',1)->where('blog_id',$data['blog']->id)->orderBy('id','DESC')->get();
        $data['setting'] =  setting::first();
        return view('Fontend.Pages.blog_detils',$data);
    }

    public function wishList(){
        $data['LangMessage'] =  LangMessage::first();
        $data['seo_setting'] =  seo_setting::where('id',10)->first();
        $data['setting'] =  setting::first();
        $data['app'] =  MobileApp::first();
        $data['section'] =  SectionTitel::first();
        $wishlist = session('wishlist', []);
        $data['product'] = product::where('status', 'active')->whereIn('id', $wishlist)->get();
        return view('Fontend.Pages.wishlist',$data);
    }

    public function cartList(Request $request){
        $data['LangMessage'] =  LangMessage::first();
        $data['seo_setting'] =  seo_setting::where('id',11)->first();
        $data['setting'] =  setting::first();
        $data['app'] =  MobileApp::first();
        $data['section'] =  SectionTitel::first();
        $data['cart'] = $request->session()->get('cart', []);
        return view('Fontend.Pages.cart_detils',$data);
    }


    public function newsLatter(Request $request){
        
        $validate = Validator::make($request->all(),[
            'email' => 'required'
        ]);

        if(subscriber::where('email',$request->email)->first())
        {
           $message = "Olredy Subscribe ";
           $notification = array('message' => $message, 'alert-type' => 'info');
           return redirect()->back()->with($notification);
        }else{
        $subscriber = new subscriber();
           $subscriber->email = $request->email;
           $subscriber->save();
           $message = "Subscribe Successfully";
           $notification = array('message' => $message, 'alert-type' => 'success');
           return redirect()->back()->with($notification);
        } 
    }

    public function contactMessage(Request $request){
        
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

           $msg = new contact_message();
           $msg->name = $request->name;
           $msg->email = $request->email;
           $msg->phone = $request->phone;
           $msg->subject = $request->subject;
           $msg->message = $request->message;
           $msg->save();
           $message = "Contact Message Send Succesfully";
           $notification = array('message' => $message, 'alert-type' => 'success');
           return redirect()->back()->with($notification);
    }

    public function ProductReview(Request $request){

        $validate = Validator::make($request->all(), [
            'product_id' => 'required',
            'review' => 'required',
            'rating' => 'required',
        ]);
        
        if (auth()->check()) {
            if ($validate->fails()) {
                $message = "Validation failed. Please check the required fields.";
                $notification = array('message' => $message, 'alert-type' => 'error');
                return redirect()->back()->with($notification);
            }
        
            $review = new Review();
            $review->product_id = $request->product_id;
            $review->user_id = Auth::user()->id;
            $review->review = $request->review;
            $review->rating = $request->rating;
            $review->save();
        
            $message = "Review Sent Successfully";
            $notification = array('message' => $message, 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $message = "First You Need To login";
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->route('login')->with($notification); 
        }
        
        
    }

    
    public function blogComment(Request $request){

        $validate = Validator::make($request->all(), [
            'blog_id' => 'required',
            'comment' => 'required',
        ]);
        
        if (auth()->check()) {
            if ($validate->fails()) {
                $message = "Validation failed. Please check the required fields.";
                $notification = array('message' => $message, 'alert-type' => 'error');
                return redirect()->back()->with($notification);
            }
        
            $comment = new blog_comment();
            $comment->blog_id = $request->blog_id;
            $comment->user_id = Auth::user()->id;
            $comment->comment = $request->comment;
            $comment->save();
        
            $message = "Comment Successfully";
            $notification = array('message' => $message, 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $message = "First You Need To login";
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->route('login')->with($notification); 
        }
        
        
    }

    public function tremsOfServices()
    {
        $data['trems_condation'] = terms_and_condition::with('termsandcondition_translate')->first();
        return view('Fontend.Pages.trems_and_services',$data);
    }

    public function privacyPolicy()
    {
        $data['privecy'] = terms_and_condition::with('termsandcondition_translate')->first();
        return view('Fontend.Pages.privacy_policy',$data);
    }
}
