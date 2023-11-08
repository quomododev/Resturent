



<?php

use Illuminate\Support\Facades\Route;




use App\Http\Controllers\WEB\Admin\AdminOrderController;
use App\Http\Controllers\WEB\Admin\HistoryController;
use App\Http\Controllers\WEB\Admin\SettingsController;

use App\Http\Controllers\WEB\Admin\TermsConditionController;
use App\Http\Controllers\WEB\Admin\NotificationsController;
use App\Http\Controllers\WEB\Admin\AdminMessageController;



//************ valide route for this product***********

use App\Http\Controllers\WEB\Auth\AdminLoginController;
use App\Http\Controllers\WEB\Admin\DashboardController;

use App\Http\Controllers\WEB\Admin\CustomersController;


use App\Http\Controllers\WEB\Admin\SubCategoryController;
use App\Http\Controllers\WEB\Admin\ChildCategoryController;

use App\Http\Controllers\WEB\Admin\CountryController;
use App\Http\Controllers\WEB\Admin\StateController;
use App\Http\Controllers\WEB\Admin\CityController;



use App\Http\Controllers\WEB\Admin\AdminController;
use App\Http\Controllers\WEB\Admin\PartnerController;
use App\Http\Controllers\WEB\Admin\GalleryController;

use App\Http\Controllers\WEB\Admin\SubscriberController;

use App\Http\Controllers\WEB\Admin\TestimonialController;

use App\Http\Controllers\WEB\Admin\LanguageController;

use App\Http\Controllers\WEB\Admin\ColorController;

use App\Http\Controllers\WEB\Admin\LotFeatureController;

use App\Http\Controllers\WEB\Admin\IndoreFeatureController;

use App\Http\Controllers\WEB\Admin\OutdoorFeatureController;

use App\Http\Controllers\WEB\Admin\PropertyController;

use App\Http\Controllers\WEB\Admin\TeamController;

use App\Http\Controllers\WEB\Admin\AgentController;

use App\Http\Controllers\WEB\Admin\FAQController;

use App\Http\Controllers\WEB\Admin\InteriorFeatureController;

use App\Http\Controllers\WEB\Admin\ExteriorFeatureController;

use App\Http\Controllers\WEB\Admin\SaftyFeatureController;

use App\Http\Controllers\WEB\Admin\CarController;

use App\Http\Controllers\WEB\Admin\OurFeatureController;

use App\Http\Controllers\WEB\Admin\ContactUsController;

use App\Http\Controllers\WEB\Admin\SliderController;

use App\Http\Controllers\WEB\Admin\ExploreController;

use App\Http\Controllers\WEB\Admin\PricingPlanController;


use App\Http\Controllers\WEB\Admin\AgencyController;

//************End*************



use App\Http\Controllers\WEB\Admin\AdminBrandController;
use App\Http\Controllers\WEB\Admin\AdminProductController;
use App\Http\Controllers\WEB\Admin\AdminColorAndSizeController;
use App\Http\Controllers\WEB\Admin\ProductImageGalleryController;
use App\Http\Controllers\WEB\Admin\InventoryController;
use App\Http\Controllers\WEB\Admin\AdminProfileController;
use App\Http\Controllers\WEB\Admin\AdminProductVariantController;

use App\Http\Controllers\WEB\Admin\AdminPageSetupController;
use App\Http\Controllers\WEB\Admin\AdminSliderController;;
use App\Http\Controllers\WEB\Admin\FlashSaleProductController;

use App\Http\Controllers\WEB\Admin\InvoiceController;

use App\Http\Controllers\WEB\Admin\MegamenuController;
use App\Http\Controllers\WEB\Admin\PopulerCategoryController;
use App\Http\Controllers\WEB\Admin\FeatureCategoryController;
use App\Http\Controllers\WEB\Admin\ProductReportController;
use App\Http\Controllers\WEB\Admin\FooterController;
use App\Http\Controllers\WEB\Admin\FooterSocialLinkController;
use App\Http\Controllers\WEB\Admin\FooterLinkController;
use App\Http\Controllers\WEB\Admin\AboutUsController;

use App\Http\Controllers\WEB\Admin\PrivecyController;
use App\Http\Controllers\WEB\Admin\SEOSetupController;

;



use App\Http\Controllers\WEB\Admin\WhyChooseUsController;
use App\Http\Controllers\WEB\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\WEB\Admin\EmailConfigController;
use App\Http\Controllers\WEB\Admin\AllSectionController;



use App\Http\Controllers\WEB\User\Auth\LoginController;
use App\Http\Controllers\WEB\User\Auth\RegisterController;
// use App\Http\Controllers\WEB\User\HomeController;
use App\Http\Controllers\WEB\User\ProductDetailsController;
// use App\Http\Controllers\WEB\User\WishlistController;
// use App\Http\Controllers\WEB\User\CartController;
use App\Http\Controllers\WEB\User\CheckoutController;
use App\Http\Controllers\WEB\User\CompleteOrderController;
use App\Http\Controllers\WEB\User\ProductsController;
use App\Http\Controllers\WEB\User\UserBlogController;
use App\Http\Controllers\WEB\User\UserContactUsController;
use App\Http\Controllers\WEB\User\UserCategoryProductController;
use App\Http\Controllers\WEB\User\UserProductReviewUsController;
use App\Http\Controllers\WEB\User\UserController;
use App\Http\Controllers\WEB\User\UserOurTeamController;
use App\Http\Controllers\WEB\User\SubscriptionController;
use App\Http\Controllers\WEB\User\UserServiceController;
use App\Http\Controllers\WEB\User\UserPricingPlanController;
use App\Http\Controllers\WEB\User\UserWhyChooseUsController;
use App\Http\Controllers\WEB\User\UserAboutUsController;
use App\Http\Controllers\WEB\User\AddressController;



use App\Http\Controllers\StripeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RozarpayController;
use App\Http\Controllers\SslCommerzPaymentController;



// Resturen Project
use App\Http\Controllers\WEB\Admin\CategoryController;
use App\Http\Controllers\WEB\Admin\OptionalItemController;
use App\Http\Controllers\WEB\Admin\ProductController;
use App\Http\Controllers\WEB\Admin\BlogController;
use App\Http\Controllers\WEB\Admin\BlogCategoryController;
use App\Http\Controllers\WEB\Admin\FAQAboutController;
use App\Http\Controllers\WEB\Admin\MobileAppController;
use App\Http\Controllers\WEB\Admin\CraftingProcessController;
use App\Http\Controllers\WEB\Admin\PromotionController;
use App\Http\Controllers\WEB\Admin\SectionController;
use App\Http\Controllers\WEB\Admin\EmptyImageController;
use App\Http\Controllers\WEB\Admin\DefaultAvatarController;
use App\Http\Controllers\WEB\Admin\ProductReviewController;
use App\Http\Controllers\WEB\Admin\CouponController;
use App\Http\Controllers\WEB\Admin\ShippingController;

use App\Http\Controllers\WEB\Auth\UserLoginController;
use App\Http\Controllers\WEB\Auth\ForgotPasswordController;

use App\Http\Controllers\WEB\User\DashboardController as UserDashboardController;


use App\Http\Controllers\WEB\Fontend\HomeController;
use App\Http\Controllers\WEB\Fontend\WishlistController;
use App\Http\Controllers\WEB\Fontend\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Fontend Pages Routes....
Route::get('/lang/{lang_code}', [HomeController::class,'setLanguage'])->name('set.language');
Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/menu', [HomeController::class,'menu'])->name('menu');
Route::get('/category/wise/{id}', [HomeController::class,'categoyWise'])->name('category.manue');
Route::get('/menu/{slug}', [HomeController::class,'menuDetils'])->name('menu-detils');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class,'blogDetils'])->name('blog-detils');
Route::get('/wishlist', [HomeController::class,'wishList'])->name('wishlist');
Route::get('/cartlist', [HomeController::class,'cartList'])->name('cartlist');
Route::get('/checkout', [HomeController::class,'checkOut'])->name('checkout');
Route::post('/newslatter', [HomeController::class,'newsLatter'])->name('newslatter');
Route::post('/contact/message', [HomeController::class,'contactMessage'])->name('contact.message');
Route::post('/product/review', [HomeController::class,'ProductReview'])->name('product.review');
Route::post('/blog/comment', [HomeController::class,'blogComment'])->name('blog.comment');
Route::get('/search', [HomeController::class,'search'])->name('search');



Route::get('/cart-view', [CartController::class,'view'])->name('wishlist.index');
Route::get('/add-to-cart/{product}', [CartController::class,'addToCart'])->name('cart.add');
Route::post('/cart/add', [CartController::class,'addProduct'])->name('cart.add.detils');
Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::delete('/cart/remove/{product}', [CartController::class,'removeProduct'])->name('cart.remove');

Route::get('/wishlist/add', [WishlistController::class,'index'])->name('wishlist.index');
Route::get('/wishlist/add/{product_id}',[WishlistController::class,'add'])->name('wishlist.add');
Route::get('/wishlist/remove/{product_id}',[WishlistController::class,'remove']) ->name('wishlist.remove');

// User Login Routes.....
Route::group(['middleware'=>'guest'],function () {
    Route::get('/login', [UserLoginController::class,'index'])->name('login');
    Route::post('/login', [UserLoginController::class,'login'])->name('login');
    
    Route::get('/register', [UserLoginController::class,'registerView'])->name('register');
    Route::post('/register', [UserLoginController::class,'register'])->name('register');

    Route::get('/forgot/password', [UserLoginController::class,'Forgot'])->name('forgot.password.user');
    Route::post('/forgot/password', [UserLoginController::class,'ForgotPassword'])->name('forgot.password.user');

    Route::get('/reset/password', [UserLoginController::class,'ResetPassword'])->name('reset.password.user');

    Route::post('/set/password', [UserLoginController::class,'SetPassword'])->name('reset.password.user');   
});
// User Page Routes
Route::group(['middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::get('/logout', [UserLoginController::class, 'LogOut'])->name('logout');

    Route::get('/dashboard', [UserDashboardController::class, 'UserDashboard'])->name('user.dashboard');
    Route::post('/update/profile/{id}', [UserDashboardController::class, 'UpdateProfile'])->name('user.update.profile');
    Route::post('/update/profile', [UserDashboardController::class, 'ChnagePassword'])->name('user.update.password');
   
    

});
Route::get('/get-states', [UserDashboardController::class, 'getStates']);
Route::get('/get-cities', [UserDashboardController::class, 'getCities']);








Route::get('/admin/login', [AdminLoginController::class,'index'])->name('admin.login.index');
Route::post('/admin/login', [AdminLoginController::class,'Login'])->name('admin.login');
Route::get('/login-out', [AdminLoginController::class,'Logout'])->name('admin.logout');


Route::get('/forgot-password-index', [ForgotPasswordController::class,'index'])->name('forgot.password');
Route::post('/forgot-password', [ForgotPasswordController::class,'ForgotPassword'])->name('admin.forgot.password');
Route::get('/reset-password', [ForgotPasswordController::class,'ResetPassword'])->name('admin.reset.password');
Route::post('/set-password', [ForgotPasswordController::class,'SetPassword'])->name('reset.password');


Route::group(['middleware' =>'admin'], function () {

        Route::get('/admin-dashboard', [DashboardController::class,'index'])->name('admin.dashboard');

        //valide for this Resturent project

        //***************** Category Route ***************************
        Route::get('/category-list',[CategoryController::class,'index'])->name('categories');
        Route::get('/category-create',[CategoryController::class,'create'])->name('category.create');
        Route::post('/category-add',[CategoryController::class,'store'])->name('category.store');
        Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('category-edit');
        Route::post('/update-category/{id}',[CategoryController::class,'updateCategory'])->name('category-update');
        Route::get('/change/status/{id}',[CategoryController::class,'Status'])->name('admin.category.status.change');
        Route::get('/category-destroy/{id}',[CategoryController::class,'delete'])->name('category-destroy');
        Route::get('/category-language-edit/{categoryId}/{langCode}',[CategoryController::class,'editLanguage'])->name('category.language.edit');
        Route::post('/category-language-edit/{id}',[CategoryController::class,'updateLanguage'])->name('category.language_update');
         //***************** Optional Route ***************************
        Route::get('/optional-item-list',[OptionalItemController::class,'index'])->name('optional.item');
        Route::get('/optional-item-create',[OptionalItemController::class,'create'])->name('optional.item.create');
        Route::post('/optional-item-add',[OptionalItemController::class,'store'])->name('optional.item.store');
        Route::get('/edit-optional-item/{id}',[OptionalItemController::class,'edit'])->name('optional.item.edit');
        Route::post('/update-optional-item/{id}',[OptionalItemController::class,'update'])->name('optional.item.update');
        Route::get('/change-optional-items-status/{id}',[OptionalItemController::class,'Status'])->name('optional.item.status.change');
        Route::get('/optional-item-destroy/{id}',[OptionalItemController::class,'delete'])->name('optional.item.destroy');
        Route::get('/optional-item-language-edit/{itemId}/{langCode}',[OptionalItemController::class,'editLanguage'])->name('optional.item.language.edit');
        Route::post('/optional-item-language-edit/{id}',[OptionalItemController::class,'updateLanguage'])->name('optional.item.language.update');
         //***************** Product Route ***************************
        Route::get('/product-list-show',[ProductController::class,'index'])->name('product.list.show');
        Route::get('/product-create',[ProductController::class,'create'])->name('product.create');
        Route::post('/product-add',[ProductController::class,'store'])->name('product.store');
        Route::get('/edit-product-item/{id}',[ProductController::class,'edit'])->name('product.edit');
        Route::post('/update-product-item/{id}',[ProductController::class,'update'])->name('product.item.update');
        Route::get('/change-product-items-status/{id}',[ProductController::class,'Status'])->name('product.item.status.change');
        Route::get('/product-item-destroy/{id}',[ProductController::class,'delete'])->name('product.destroy');
        Route::get('/product-item-language-edit/{itemId}/{langCode}',[ProductController::class,'editLanguage'])->name('product.item.language.edit');
        Route::post('/product-item-language-edit/{id}',[ProductController::class,'updateLanguage'])->name('product.item.language.update');
         //***************** Product Gallery Route ***************************
        Route::get('/product-gallery/{id}',[ProductController::class,'GalleryView'])->name('product.gallery');
        Route::post('/product-gallery-store/{id}',[ProductController::class,'GalleryStore'])->name('product.gallery.store');
        Route::get('/product-gallery-destroy/{id}',[ProductController::class,'GalleryDelete'])->name('product.gallery.destroy');
        //*************** Blog Category Route **********
        Route::get('/blog-categories',[BlogCategoryController::class,'index'])->name('blog-categories');
        Route::get('/blog-category-create',[BlogCategoryController::class,'create'])->name('blog-category.create');
        Route::post('/admin-blog-category-add',[BlogCategoryController::class,'store'])->name('blog-category.store');
        Route::get('blog-category-edit/{id}',[BlogCategoryController::class,'edit'])->name('blog-category.edit');
        Route::post('blog-category-update/{id}',[BlogCategoryController::class,'update'])->name('blog-category.update');
        Route::get('/blog-category-destroy/{id}',[BlogCategoryController::class,'delete'])->name('blog-category.destroy');
        Route::get('blog-category-edit-language/{blogCategoryId}/{langCode}',[BlogCategoryController::class,'editLanguage'])->name('blog-category.language.edit');
        Route::post('blog-category-update-language/{id}',[BlogCategoryController::class,'updateLanguage'])->name('blog-category.language_update');
        Route::get('blog-category-status-update/{id}',[BlogCategoryController::class,'UpdateStatus'])->name('update.status.blog.category');
        //*************** Blog Route **********
        Route::get('/blog-status-chnage/{id}',[BlogController::class,'Status'])->name('blog.status.change');
        Route::get('/blog-destroy/{id}',[BlogController::class,'delete'])->name('blog-delete');
        Route::get('/eidt-blog-language/{blogId}/{langCode}',[BlogController::class,'editLanguage'])->name('blogs.language.edit');
        Route::post('blog-update/{id}',[BlogController::class,'updateLanguage'])->name('blogs.language_update');
        Route::resource('blogs',BlogController::class);

        Route::get('/blog-comment',[BlogController::class,'blogComment'])->name('blog.comment');
        Route::get('blog/change/status/{id}',[BlogController::class,'changeBlogStatus'])->name('blog.change.status');
        Route::get('/blog/delete/{id}',[BlogController::class,'blogDelete'])->name('blog.comment.delete');
        //*************** Country Route **********
        Route::get('country-status/{id}',[CountryController::class,'Status'])->name('country-status');
        Route::get('/country-language/{countryId}/{langCode}',[CountryController::class,'editLanguage'])->name('country.language.edit');
        Route::post('country-language-update/{id}',[CountryController::class,'updateLanguage'])->name('country.language_update');
        Route::get('/county-delete/{id}',[CountryController::class,'delete'])->name('country.delete');
        Route::resource('countries',CountryController::class);

        //*************** State Route **********
        Route::get('state-status/{id}',[StateController::class,'Status'])->name('state-status');
        Route::get('/state-language-edit/{stateId}/{langCode}',[StateController::class,'editLanguage'])->name('state.language.edit');
        Route::post('state-language-update/{id}',[StateController::class,'updateLanguage'])->name('state.language_update');
        Route::get('/state-delete/{id}',[StateController::class,'delete'])->name('state.delete');
        Route::resource('states',StateController::class);

        //*************** City Route **********
        Route::get('/update-city-status/{id}',[CityController::class,'UpdateCityStatus'])->name('city.status.update');
        Route::get('/city-language-edit/{cityId}/{langCode}',[CityController::class,'editLanguage'])->name('city.language.edit');
        Route::post('city-language-update/{id}',[CityController::class,'updateLanguage'])->name('city.language_update');
        Route::get('/city-delete/{id}',[CityController::class,'delete'])->name('cities.delete');
        Route::resource('cities',CityController::class);
        // ************* FAQ Route************
        Route::get('/chnage-status/{id}',[FAQController::class,'ChangeStatus'])->name('faq.status.change');
        Route::get('/faq-language-edit/{faqId}/{langCode}',[FAQController::class,'editLanguage'])->name('faq.language.edit');
        Route::post('faq-language-update/{id}',[FAQController::class,'updateLanguage'])->name('faq.language_update');
        Route::get('faq-delete/{id}',[FAQController::class,'delete'])->name('faq.delete');
        Route::resource('faqs',FAQController::class);
        // ************* FAQ Route************
        Route::get('/chnage-status/{id}',[FAQController::class,'ChangeStatus'])->name('faq.status.change');
        Route::get('/faq-language-edit/{faqId}/{langCode}',[FAQController::class,'editLanguage'])->name('faq.language.edit');
        Route::post('faq-language-update/{id}',[FAQController::class,'updateLanguage'])->name('faq.language_update');
         //*************** Faq About Route **********
        Route::get('faq-about-language/edit/{langCode}',[FAQAboutController::class,'editLanguage'])->name('faq.about.language.edit');
        Route::post('faq-about-language-update/{id}',[FAQAboutController::class,'updateLanguage'])->name('faq.about.language-update');
        Route::get('faq-about',[FAQAboutController::class,'index'])->name('faq.about.index');
        Route::post('faq-about-update/{id}',[FAQAboutController::class,'update'])->name('faq.about.update');
         //*************** Mobile App Route **********
        Route::get('mobile-app-language/edit/{langCode}',[MobileAppController::class,'editLanguage'])->name('mobile.app.language.edit');
        Route::post('mobile-app-language-update/{id}',[MobileAppController::class,'updateLanguage'])->name('mobile.app.language-update');
        Route::get('mobile-app',[MobileAppController::class,'index'])->name('mobile.app.index');
        Route::post('mobile-app-update/{id}',[MobileAppController::class,'update'])->name('mobile.app.update');
        // ************* Crafting Process Route************
        Route::get('crafting-language/edit/{langCode}',[CraftingProcessController::class,'editLanguage'])->name('crafting.language.edit');
        Route::post('crafting-language-update/{id}',[CraftingProcessController::class,'updateLanguage'])->name('crafting.language-update');
        Route::get('crafting',[CraftingProcessController::class,'index'])->name('crafting.index');
        Route::post('crafting-update/{id}',[CraftingProcessController::class,'update'])->name('crafting.update');
        //***************Product Promotion Route **********
        Route::get('promotion-product-delete/{id}',[PromotionController::class,'delete'])->name('promotion.product.delete');
        Route::resource('promotion',PromotionController::class);
        //*************** Footer Payment Method Images Route **********
        Route::get('gallery-delete/{id}',[GalleryController::class,'delete'])->name('gallery.delete');
        Route::resource('galleries',GalleryController::class);
         //*************** Footer Route **********
        Route::get('footer-language/edit/{langCode}',[FooterController::class,'editLanguage'])->name('footer.language.edit');
        Route::post('footer-language-update/{id}',[FooterController::class,'updateLanguage'])->name('footer.language-update');
        Route::get('footer',[FooterController::class,'index'])->name('footer.index');
        Route::post('footer-update/{id}',[FooterController::class,'update'])->name('footer.update');
         //*************** Footer Social Link Route **********
        Route::resource('FooterSocialLink',FooterSocialLinkController::class);
        //*************** Footer First Colum Link Route **********
        Route::get('column-status/{id}',[FooterLinkController::class,'Status'])->name('column-status');
        Route::get('/column-language/{columnId}/{langCode}',[FooterLinkController::class,'editLanguage'])->name('column.language.edit');
        Route::post('column-language-update/{id}',[FooterLinkController::class,'updateLanguage'])->name('column.language_update');
        Route::get('/column-delete/{id}',[FooterLinkController::class,'delete'])->name('column.delete');
        Route::resource('column',FooterLinkController::class);
        // ************* footer Column Route************
        Route::get('/first-column-link',[FooterLinkController::class,'FirstColumn'])->name('footer.first.column.link');
        Route::get('/second-column-link',[FooterLinkController::class,'SecondColumn'])->name('footer.second.column.link');
        Route::get('/third-column-link',[FooterLinkController::class,'ThirdColumn'])->name('footer.third.column.link');
        Route::post('/first-column-link-store',[FooterLinkController::class,'FirstColumnLinkStore'])->name('store.footer.first.column.link');
        Route::get('/first-column-link-delete/{id}',[FooterLinkController::class,'FirstColumnLinkDelete'])->name('delete.footer.first.column.link');
        Route::get('/first-column-link-edit/{id}',[FooterLinkController::class,'FirstColumnLinkEdit'])->name('edit.footer.first.column.link');
        Route::post('/first-column-link-update/{id}',[FooterLinkController::class,'FirstColumnLinkUpdate'])->name('update.footer.first.column.link');
        Route::post('/second-column-link-store',[FooterLinkController::class,'SecondColumnLinkStore'])->name('store.footer.second.column.link');
        Route::post('/second-column-link-update/{id}',[FooterLinkController::class,'SecondColumnLinkUpdate'])->name('update.footer.second.column.link');
        Route::get('/second-column-link-delete/{id}',[FooterLinkController::class,'SecondColumnLinkDelete'])->name('delete.footer.second.column.link');
        // ************* Section Titel Route************
        Route::get('section-title/edit/{langCode}',[SectionController::class,'editLanguage'])->name('section.title.language.edit');
        Route::post('section-title-language-update/{id}',[SectionController::class,'updateLanguage'])->name('section.title.language-update');
        Route::get('section-title',[SectionController::class,'index'])->name('section.title.index');
        Route::post('section-title-update/{id}',[SectionController::class,'update'])->name('section.title.update');

        Route::resource('EmptyImage',EmptyImageController::class);

        Route::resource('DefaultAvatar',DefaultAvatarController::class);
        // Contact Message Routes.....
        Route::get('/message',[AdminMessageController::class,'index'])->name('admin.message.index');
        Route::get('/message-delete/{id}',[AdminMessageController::class,'deleteMessage'])->name('delete.message');
        // Subscriber Routes.....
        Route::get('subscriber-status-chnage/{id}',[SubscriberController::class,'ChangeStatus'])->name('subscriber.change.status');
        Route::get('/subscriber-delete/{id}',[SubscriberController::class,'deleteSubscriber'])->name('subscriber.delete');
        Route::get('/Subscriber',[SubscriberController::class,'index'])->name('subscriber.index');
         // Subscriber Routes.....
        Route::get('reviews/status/change/{id}', [ProductReviewController::class, 'changeReviewStatus'])->name('reviews.change.status');
        Route::get('/reviews-delete/{id}',[ProductReviewController::class,'deleteReviews'])->name('reviews.delete');
        Route::get('/reviews',[ProductReviewController::class,'index'])->name('reviews.index');
         //*************** Coupon Route **********
        Route::get('coupon-status-chnage/{id}',[CouponController::class,'ChangeStatus'])->name('coupon.change.status');
        Route::get('/coupon-delete/{id}',[CouponController::class,'delete'])->name('coupon.delete');
        Route::resource('coupon',CouponController::class);
         //*************** Shipping Route **********
        Route::get('/shipping-delete/{id}',[ShippingController::class,'delete'])->name('shipping.delete');
        Route::resource('shipping',ShippingController::class);


        ######################################################################################################################################



        //***************** Sub Category Route ***************************
        Route::get('sub-category-change-status/{id}',[SubCategoryController::class,'Status'])->name('chnage-subcategory-status');
        Route::get('/eidt-sub-category-language/{subCategoryId}/{langCode}',[SubCategoryController::class,'editLanguage'])->name('sub-categories.language.edit');
        Route::post('sub-category-update/{id}',[SubCategoryController::class,'updateLanguage'])->name('sub-category.language_update');
        Route::get('sub-category-delete/{id}',[SubCategoryController::class,'delete'])->name('sub-category.delete');
        Route::resource('sub-category',SubCategoryController::class);


        //***************** Child Category Route ***************************
        Route::get('change-status/{id}',[ChildCategoryController::class,'Status'])->name('child-categories.status');
        Route::get('delete-child-category/{id}',[ChildCategoryController::class,'delete'])->name('child-categories.delete');
        Route::get('/child-category-language/{childCategoryId}/{langCode}',[ChildCategoryController::class,'editLanguage'])->name('child-categories.language.edit');
        Route::post('child-category-update/{id}',[ChildCategoryController::class,'updateLanguage'])->name('child-category.language_update');
        Route::resource('child-categories',ChildCategoryController::class);


        //***************** Color Route ***************************
        Route::get('/colorlanguage/{colorId}/{langCode}',[ColorController::class,'editLanguage'])->name('color.language.edit');
        Route::post('color-update/{id}',[ColorController::class,'updateLanguage'])->name('color.language_update');
        Route::get('delete-color/{id}',[ColorController::class,'delete'])->name('color.delete');
        Route::resource('colors',ColorController::class);

        Route::get('chnage-admin-status/{id}',[AdminController::class,'Status'])->name('chnage.admin.status');
        Route::resource('admins',AdminController::class);






        //***************Partner Route **********
        Route::get('partner-delete/{id}',[PartnerController::class,'delete'])->name('patners.delete');
        Route::resource('partners',PartnerController::class);

        //*************** Gallery Route **********
        Route::get('gallery-delete/{id}',[GalleryController::class,'delete'])->name('gallery.delete');
        Route::resource('galleries',GalleryController::class);



        //*************** Testmonial Route **********
        Route::get('/testimonials-status-update/{id}',[TestimonialController::class,'UpdateStatus'])->name('testimonial.status.update');
        Route::get('/testimonials-delete/{id}',[TestimonialController::class,'delete'])->name('testimonials.delete');
        Route::get('testimonial-edit-language/{testimonialId}/{langCode}',[TestimonialController::class,'editLanguage'])->name('testimonials.language.edit');
        Route::post('testimonial-update-language/{id}',[TestimonialController::class,'updateLanguage'])->name('testimonial.language-update');
        Route::resource('testimonials',TestimonialController::class);

        //*************** Language Route **********
        Route::get('/language-status/{id}',[LanguageController::class,'status'])->name('language-status');
        Route::get('/language-delete/{id}',[LanguageController::class,'delete'])->name('language.delete');
        Route::resource('languages',LanguageController::class);

        //*************** Why choose-us Route **********
        Route::get('whychooseus.language.edit/{langCode}',[WhyChooseUsController::class,'editLanguage'])->name('whychooseus.language.edit');
        Route::post('whychooseus.language-update/{id}',[WhyChooseUsController::class,'updateLanguage'])->name('whychooseus.language-update');
        Route::get('why-choose-us-eidt',[WhyChooseUsController::class,'edit'])->name('Why-choose-us.edit');
        Route::post('why-choose-us-update',[WhyChooseUsController::class,'update'])->name('Why-choose-us.update');

        //*************** Testimonial Route **********
        Route::get('termsandcondition.language.edit/{langCode}',[TermsConditionController::class,'editLanguage'])->name('termsandcondition.language.edit');
        Route::post('termsandcondition.language-update/{id}',[TermsConditionController::class,'updateLanguage'])->name('termsandcondition.language-update');
        Route::get('/terms-and-condition',[TermsConditionController::class,'index'])->name('terms.and.conditions');
        Route::post('/terms-and-condition-update/{id}',[TermsConditionController::class,'TermsAndConditionsUpdate'])->name('terms.and.conditions.update');

        //*************** Privacy Route **********
        Route::get('privacy.language.edit/{langCode}',[PrivecyController::class,'editLanguage'])->name('privacy.language.edit');
        Route::post('privacy.language-update/{id}',[PrivecyController::class,'updateLanguage'])->name('privacy.language-update');
        Route::get('/Privecy-policy',[PrivecyController::class,'index'])->name('privecy.policy');
        Route::post('/privecy-update/{id}',[PrivecyController::class,'PrivecyUpdate'])->name('privecy.update');

        //*************** About us Route **********
        Route::get('about.language.edit/{langCode}',[AboutUsController::class,'editLanguage'])->name('about.language.edit');
        Route::post('about.language-update/{id}',[AboutUsController::class,'updateLanguage'])->name('about.language-update');
        Route::get('about-us',[AboutUsController::class,'index'])->name('about-us.index');


        //*************** Lot-featured Route **********
        Route::get('lot-feature-language/{lotFeatureId}/{langCode}',[LotFeatureController::class,'editLanguage'])->name('lotfeature.language.edit');
        Route::post('lotfeature-update-language/{id}',[LotFeatureController::class,'updateLanguage'])->name('lotfeature.language-update');
        Route::get('lotfeature-delete/{id}',[LotFeatureController::class,'delete'])->name('lot-feature.delete');
        Route::resource('lot-feature',LotFeatureController::class);


        //*************** Indoore-Feature Route **********
        Route::get('indorefeature-language/{indoreFeatureId}/{langCode}',[IndoreFeatureController::class,'editLanguage'])->name('indorefeature.language.edit');
        Route::post('indorefeature-update-language/{id}',[IndoreFeatureController::class,'updateLanguage'])->name('indorefeature.language-update');
        Route::get('indorefeature-delete/{id}',[IndoreFeatureController::class,'delete'])->name('indorefeature.delete');
        Route::resource('indore-feature',IndoreFeatureController::class);


        //*************** Outdoore-Feature Route **********
        Route::get('outdoorfeature-language/{outdoorFeatureId}/{langCode}',[OutdoorFeatureController::class,'editLanguage'])->name('outdoorfeature.language.edit');
        Route::post('indorefeature-update-language/{id}',[OutdoorFeatureController::class,'updateLanguage'])->name('outdoorfeature.language-update');
        Route::get('outdoorfeature-delete/{id}',[OutdoorFeatureController::class,'delete'])->name('outdoorfeature.delete');
        Route::resource('outdoor-feature',OutdoorFeatureController::class);


        //***************** Property Route ***********************//


         //*************** Ajax Request**************
        Route::get('subcategory-from-selected-category/{id}',[PropertyController::class,'subCategory'])->name('subcategory-from-selected-category');
        Route::get('childcategory-from-selected-subcategory/{id}',[PropertyController::class,'childCategory'])->name('childcategory-from-selected-subcategory');
        Route::get('state-from-selected-country/{id}',[PropertyController::class,'state'])->name('state-from-selected-country');
        Route::get('city-from-selected-state/{id}',[PropertyController::class,'city'])->name('city-from-selected-state');
        Route::get('flor-plan-delete/{id}',[PropertyController::class,'deleteFlorPlan'])->name('florplan-delete-by-ajax');


        Route::get('property-image-gallery/{id}',[PropertyController::class,'imageGallery'])->name('property.image-gallery');
        Route::post('property-image-gallery-store',[PropertyController::class,'imageStore'])->name('image-galerry.store');
        Route::get('property-image-gallery-delete/{id}',[PropertyController::class,'imageDelete'])->name('delete-image-fromgallery');
        Route::get('property-status/{id}',[PropertyController::class,'status'])->name('property.status');
        Route::get('property-delete/{id}',[PropertyController::class,'delete'])->name('property.delete');
        Route::get('property-language-edit/{listingId}/{langCode}',[PropertyController::class,'editLanguage'])->name('property.language.edit');
        Route::post('property-update-language/{id}',[PropertyController::class,'updateLanguage'])->name('property.language_update');
        Route::resource('property',PropertyController::class);


       // ************* Team Member Route************
        Route::get('team-language-edit/{teamId}/{langCode}',[TeamController::class,'editLanguage'])->name('team.language.edit');
        Route::post('team-update-language/{id}',[TeamController::class,'updateLanguage'])->name('team.language_update');
        Route::get('team-delete/{id}',[TeamController::class,'delete'])->name('team.delete');
        Route::resource('teams',TeamController::class);

        // ************* Agent Route************
        Route::get('agent-language-edit/{teamId}/{langCode}',[AgentController::class,'editLanguage'])->name('agent.language.edit');
        Route::post('agent-update-language/{id}',[AgentController::class,'updateLanguage'])->name('agent.language_update');
        Route::get('agent-delete/{id}',[AgentController::class,'delete'])->name('agent.delete');
        Route::resource('agents',AgentController::class);



        // ************* Interior Feature Route************
        Route::get('/interior-feature-language-edit/{interiorId}/{langCode}',[InteriorFeatureController::class,'editLanguage'])->name('interior-feature.language.edit');
        Route::post('interior-feature-language-update/{id}',[InteriorFeatureController::class,'updateLanguage'])->name('interior-feature.language_update');
        Route::get('interior-feature-delete/{id}',[InteriorFeatureController::class,'delete'])->name('interior-feature.delete');
        Route::resource('interior-feature',InteriorFeatureController::class);


        // ************* Exterior Feature Route************
        Route::get('/exterior-feature-language-edit/{exteriorId}/{langCode}',[ExteriorFeatureController::class,'editLanguage'])->name('exterior-feature.language.edit');
        Route::post('exterior-feature-language-update/{id}',[ExteriorFeatureController::class,'updateLanguage'])->name('exterior-feature.language_update');
        Route::get('exterior-feature-delete/{id}',[ExteriorFeatureController::class,'delete'])->name('exterior-feature.delete');
        Route::resource('exterior-feature',ExteriorFeatureController::class);


         // ************* Safty Feature Route************
         Route::get('/safty-feature-language-edit/{saftyId}/{langCode}',[SaftyFeatureController::class,'editLanguage'])->name('safty-feature.language.edit');
         Route::post('safty-feature-language-update/{id}',[SaftyFeatureController::class,'updateLanguage'])->name('safty-feature.language_update');
         Route::get('safty-feature-delete/{id}',[SaftyFeatureController::class,'delete'])->name('safty-feature.delete');
         Route::resource('safty-feature',SaftyFeatureController::class);


          //************* Car Route **********************/

          Route::get('specification-delete-by-ajax/{id}',[CarController::class,'deleteSpecification'])->name('specification-delete-by-ajax');
          Route::get('car-language-edit/{listingId}/{langCode}',[CarController::class,'editLanguage'])->name('car.language.edit');
          Route::post('car-update-language/{id}',[CarController::class,'updateLanguage'])->name('car.language_update');

          Route::get('car-delete/{id}',[CarController::class,'delete'])->name('car.delete');
          Route::resource('cars',CarController::class);

        // ************* Our Feature Route************
         Route::get('/our-feature-language-edit/{featureId}/{langCode}',[OurFeatureController::class,'editLanguage'])->name('our-feature.language.edit');
         Route::post('our-feature-language-update/{id}',[OurFeatureController::class,'updateLanguage'])->name('our-feature-language-update');
         Route::get('our-feature-delete/{id}',[OurFeatureController::class,'delete'])->name('our-feature.delete');
         Route::resource('our-feature',OurFeatureController::class);

         // ************* Pricing Plan Route************
         Route::get('/Pricing-plan-language-edit/{langCode}',[PricingPlanController::class,'editLanguage'])->name('pricing-plan.language.edit');
         Route::post('Pricing-plan-language-update/{id}',[PricingPlanController::class,'updateLanguage'])->name('pricing-plan.language.update');
         Route::get('our-feature-delete/{id}',[PricingPlanController::class,'delete'])->name('our-feature.delete');
         Route::get('edit-pricing-plan',[PricingPlanController::class,'edit'])->name('pricing-plan.edit');
         Route::post('pricing-plan-update',[PricingPlanController::class,'update'])->name('pricing-plan.update');

        // ************* Contact-us Plan Route************
        Route::get('/contactus-language-edit/{langCode}',[ContactUsController::class,'editLanguage'])->name('contactus.language.edit');
        Route::post('contactus-plan-language-update/{id}',[ContactUsController::class,'updateLanguage'])->name('contactus.language.update');
        // Route::get('contactus-delete/{id}',[ContactUsController::class,'delete'])->name('our-feature.delete');
        Route::get('edit-contactus',[ContactUsController::class,'edit'])->name('contactus-page.edit');
        Route::post('contactus-update',[ContactUsController::class,'update'])->name('contactus-page.update');



        // ************* Safty Feature Route************
        Route::get('/slider-language-edit/{sliderId}/{langCode}',[SliderController::class,'editLanguage'])->name('slider.language.edit');
        Route::post('slider-language-update/{id}',[SliderController::class,'updateLanguage'])->name('slider.language-update');
        Route::get('slider-delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
        Route::resource('slider',SliderController::class);

        // ************* Explore Feature Route************
        Route::get('/explore-language-edit/{sliderId}/{langCode}',[ExploreController::class,'editLanguage'])->name('explore.language.edit');
        Route::post('explore-language-update/{id}',[ExploreController::class,'updateLanguage'])->name('explore.language_update');
        Route::get('explore-delete/{id}',[ExploreController::class,'delete'])->name('explore.delete');

        Route::resource('explore',ExploreController::class);


        // ************* Agency Route************
        Route::get('/agency-language-edit/{sliderId}/{langCode}',[AgencyController::class,'editLanguage'])->name('agency.language.edit');
        Route::post('agency-language-update/{id}',[AgencyController::class,'updateLanguage'])->name('agency.language_update');
        Route::get('explore-delete/{id}',[AgencyController::class,'delete'])->name('agency.delete');

        Route::resource('agency',AgencyController::class);




        //************ End Here  *****************













    Route::get('/customer-list',[CustomersController::class,'index'])->name('customer.list');
    Route::get('/customer-details/{id}',[CustomersController::class,'CustomerDetails']);
    Route::get('/pending-customer-list',[CustomersController::class,'PendingCustomer'])->name('pending.customers');
    Route::get('/approve-customer/{id}',[CustomersController::class,'ApproveCustomer'])->name('admin.approve.user');
    Route::get('/delete-pending-customer/{id}',[CustomersController::class,'DeleteUserPendingUser'])->name('admin.delete.pending.user');


    Route::get('/order-list',[AdminOrderController::class,'index'])->name('order.list');
    Route::get('/pending-orders',[AdminOrderController::class,'PendingOrders'])->name('pending.orders');
    Route::get('/progress-orders',[AdminOrderController::class,'ProgressOrders'])->name('progress.orders');
    Route::get('/delivered-orders',[AdminOrderController::class,'DeliveredOrders'])->name('delivered.orders');
    Route::get('/completed-orders',[AdminOrderController::class,'CompletedOrders'])->name('completed.orders');

    Route::get('/order-details/{id}',[AdminOrderController::class,'OrderDetails'])->name('admin.order.details');
    Route::post('/update-order-status/{id}',[AdminOrderController::class,'OrderStatusUpdate'])->name('order.status.update');
    Route::get('delete-order/{id}',[AdminOrderController::class,'DeleteOrder'])->name('admin.order.delete');


    Route::get('/history',[HistoryController::class,'index']);

    Route::get('/settings',[SettingsController::class,'index'])->name('settings');
    Route::post('/chnage-login-page-images',[SettingsController::class,'ChnageLoginPageImages'])->name('update.login.page.logo');
    Route::post('/admin-chnage-image/{id}',[SettingsController::class,'UpdateProfile'])->name('admin.update.profile');
    Route::get('/chnage-dark-mode-status',[SettingsController::class,'DarkModeStatus'])->name('dark.mode.status');
    Route::get('/get-dark-moode',[SettingsController::class,'getDarkMode'])->name('get.dark.option');
    Route::post('/admin-add-social-link',[SettingsController::class,'AddSocialLink'])->name('admin.create.social.link');
    Route::get('/delete-social-link/{id}',[SettingsController::class,'DeleteSocialLink'])->name('delete.social.account');
    Route::post('/general-setting/{id}',[SettingsController::class,'generalSetting'])->name('setting.theam.change');
    Route::post('/email-configaration',[SettingsController::class,'emailConfigaration'])->name('email.credential.update');
    Route::post('/update-google-recaptcha',[SettingsController::class,'updateGoogleRecaptcha'])->name('update-google-recaptcha');
    Route::post('/update-tawk-chat',[SettingsController::class,'updateTawkIo'])->name('update-tawk.io-live-chat');
    Route::post('/update-google-analytic',[SettingsController::class,'updateGoogleAnalytic'])->name('update-google-analytic');

    Route::post('/app-link-update/{id}',[SettingsController::class,'AppLinkUpdate'])->name('update.app.link');

    Route::get('/delete-login-activity/{id}',[SettingsController::class,'DeleteLoginActivity'])->name('delete.login.history');



    Route::get('/notifications',[NotificationsController::class,'index']);



    Route::resource('Invoice',InvoiceController::class);





    Route::get('/subcategories/{id}',[CategoryController::class,'GetSubCategory']);
    Route::get('/childcategories/{id}',[CategoryController::class,'GetChildCategory']);
    Route::get('/admin-category-index',[CategoryController::class,'CategoryIndex'])->name('admin.category.index');


    Route::get('/delete-category/{id}',[CategoryController::class,'CategoryDelete']);
    Route::get('/inactive-category',[CategoryController::class,'InactiveDelete'])->name('admin.inactive.category');

    Route::get('/category-for-feature',[CategoryController::class,'GetCategoryForFeature'])->name('category.for.feature');
    Route::post('/category-feature-create',[CategoryController::class,'CreateFeatureCategory'])->name('create.feature.category');


    Route::get('/brand-list',[AdminBrandController::class,'brandList']);
    Route::get('/admin-brand-index',[AdminBrandController::class,'BrandIndex'])->name('admin.brand.index');
    Route::post('/admin-brand-create',[AdminBrandController::class,'BrandCreate'])->name('admin.create.brand');
    Route::get('/edit-brand/{id}',[AdminBrandController::class,'EditDelete']);
    Route::post('/admin-update-brand/{id}',[AdminBrandController::class,'UpdateBrand'])->name('admin.update.brand');
    Route::get('/delete-brand/{id}',[AdminBrandController::class,'BrandDelete']);
    Route::get('/brand-status-change/{id}',[AdminBrandController::class,'BrandStatusChange'])->name('brand.status.change');

    Route::get('/product-list',[AdminProductController::class,'ProductList'])->name('admin.product.list');
    Route::get('/stock-out-product-list',[AdminProductController::class,'StockOutProducts'])->name('admin.stock.out.products');

    Route::get('/upload-products',[AdminProductController::class,'UploadProductIndex'])->name('admin.upload.product');
    Route::post('/create-product',[AdminProductController::class,'CreateProduct'])->name('admin.create.product');
    Route::get('/edit-product/{id}',[AdminProductController::class,'EditProduct'])->name('admin.edit.product');
    Route::post('/update-product/{id}',[AdminProductController::class,'UpdateProduct'])->name('admin.update.product');
    Route::get('/admin-distroy-product/{id}',[AdminProductController::class,'DistroyProduct'])->name('admin.destroy');

    Route::get('/product-status-change/{id}',[AdminProductController::class,'ProductStatusChange'])->name('product.status.chnage');
    Route::get('/product-approve-by-admin/{id}',[AdminProductController::class,'ProductApprove'])->name('product.approve');

    Route::get('/admin-product-image-gallery-index/{id}',[ProductImageGalleryController::class,'index'])->name('admin.product.image.gallery.index');
    Route::post('/admin-gallery-image-add',[ProductImageGalleryController::class,'AddGallaryImages'])->name('admin.create.product.galerry.images');
    Route::get('/delete-image-from-image-gallery/{id}',[ProductImageGalleryController::class,'DeleteImages']);
    Route::get('/chnage-product-image-status/{id}',[ProductImageGalleryController::class,'ChangeStatus'])->name('chnage.product.image.status');

    Route::post('inventory-stock-update/{id}',[InventoryController::class,'ProductStockUpdate'])->name('inventory.stock.update');
    Route::get('inventory-status-update/{id}',[InventoryController::class,'ProductStatusUpdate'])->name('inventory.status.update');
    Route::resource('Inventory',InventoryController::class);

    Route::get('/blogs-comments/{id}',[BlogController::class,'BlogComments'])->name('admin.blog.comments');
    Route::get('/delete-blogs-comments/{id}',[BlogController::class,'DeleteBlogComments'])->name('bloog.comment.delete');
    Route::get('/change-blogs-comments-status/{id}',[BlogController::class,'BlogCommentsStatusChange'])->name('admin.blog.change.status');
    Route::post('/populer-blogs-save',[BlogController::class,'PopulerBlogsStore'])->name('adminBlog.populer.save');





    Route::get('/admin-blog-category-add',[AdminPageSetupController::class,'index'])->name('page.setup');

    Route::resource('AdminSlider',AdminSliderController::class);







    


    Route::resource('ProductReport',ProductReportController::class);



   
    Route::post('/third-column-link-store',[FooterLinkController::class,'ThirdColumnLinkStore'])->name('store.footer.third.column.link');
    Route::get('/third-column-link-edit/{id}',[FooterLinkController::class,'ThirdColumnLinkEdit'])->name('edit.footer.third.column.link');
    Route::post('/third-column-link-update/{id}',[FooterLinkController::class,'ThirdColumnLinkUpdate'])->name('update.footer.third.column.link');
    Route::get('/third-column-link-delete/{id}',[FooterLinkController::class,'ThirdColumnLinkDelete'])->name('delete.footer.third.column.link');

    Route::resource('AboutUs',AboutUsController::class);



    Route::get('/service-section-index',[ServiceController::class,'ServiceSectionIndex'])->name('service.section.title');
    Route::post('/update-service-section/{id}',[ServiceController::class,'ServiceSectionUpdate'])->name('service.section.update');
    Route::get('/service-chnage-status/{id}',[ServiceController::class,'ChnageStatus'])->name('chnage.service.status');
    Route::post('/service-update',[ServiceController::class,'updateService'])->name('admin.service.update');
    Route::resource('Service',ServiceController::class);



    Route::get('/seo-setup-index',[SEOSetupController::class,'index'])->name('admin.seo.setup.index');
    Route::post('seo-setup-update/{id}',[SEOSetupController::class,'SEOUpdate'])->name('page.seo.update');










    Route::post('admin-chnage-password',[AdminProfileController::class,'ChnagePassword'])->name('admin.chnage.password');
    Route::resource('AdminProfile',AdminProfileController::class);

    Route::get('/user-about-us', function () {
        return view('User.AboutUs');
    })->name('user.about.us');


    Route::get('purches-pricing-plan',[PricingPlanController::class,'planPurchesHistory'])->name('purches.plan.history');
    Route::get('delete-purches-pricing-plan/{id}',[PricingPlanController::class,'DeletePurchesPlan'])->name('purchesh.plan.delete');
    Route::get('most-populer-pricing/{id}',[PricingPlanController::class,'mostPopuler'])->name('admin.pricing.plan.change.most.populer');
    Route::get('pricing-plan-coontent-update/{id}',[PricingPlanController::class,'updateParicingPlanContent'])->name('pricing.plan.content.delete');
    Route::get('pricing-plan-status-update/{id}',[PricingPlanController::class,'UpdateStatus'])->name('admin.pricing.plan.status.update');
    Route::get('pricing-plan-transection',[PricingPlanController::class,'PricingPlanTransection'])->name('Pricing.plan.transection');
    Route::resource('PricingPlan',PricingPlanController::class);

    Route::resource('OurTeam',OurTeamController::class);



    Route::get('admin-payment',[AdminPaymentController::class,'index'])->name('admin.payment.index');
    Route::post('paypal-credential-update',[AdminPaymentController::class,'paypalCredentialUpdate'])->name('admin.paypal.credential.update');
    Route::post('stripe-credential-update',[AdminPaymentController::class,'StripeCredentialUpdate'])->name('admin.stripe.credential.update');
    Route::post('razorpay-credential-update',[AdminPaymentController::class,'updateRazorpay'])->name('admin.razorpay.credential.update');
    Route::post('flutterwave-credential-update',[AdminPaymentController::class,'updateFlattuerwave'])->name('admin.flutterwave.credential.update');
    Route::post('paystack-credential-update',[AdminPaymentController::class,'updatePaystack'])->name('admin.paystack.credential.update');
    Route::post('instamojo-credential-update',[AdminPaymentController::class,'updateInstamojo'])->name('admin.instamojo.credential.update');

    Route::get('email-template',[EmailConfigController::class,'EmailTemplateIndex'])->name('email-config.template.index');
    Route::post('email-template-update/{id}',[EmailConfigController::class,'EmailTemplateUpdate'])->name('email-config.template.update');
    Route::resource('email-config',EmailConfigController::class);


    Route::get('video-section',[AllSectionController::class,'videosectionIndex'])->name('video.section.home5');
    Route::post('video-section-update/{id}',[AllSectionController::class,'videosectionUpdate'])->name('video.section.update');
    Route::get('how-it-work',[AllSectionController::class,'howWorksectionindex'])->name('how.it.work.section.index');
    Route::post('how-it-work-update/{id}',[AllSectionController::class,'howWorksectionUpdate'])->name('how.it.work.section.update');

    Route::get('/our-product-index',[AllSectionController::class,'OurProductIndex'])->name('our.product.list');
    Route::post('/our-product-update/{id}',[AllSectionController::class,'UpdateOurProduct'])->name('our.product.update');

 });

//});


/*<-................................User......................................->*/

Route::get('/user-login-index',[LoginController::class,'index'])->name('user.login.index');
Route::post('/user-login',[LoginController::class,'Login'])->name('user.login');
Route::get('/user-login-logout',[LoginController::class,'Logout'])->name('user.logout');

Route::post('/user-email-verify',[LoginController::class,'ForgotPassword'])->name('user.forgot.password');
Route::get('/reset-password/{token}', [LoginController::class, 'resetPasswordPage'])->name('reset-password');
Route::post('/store-reset-password/{token}', [LoginController::class, 'storeResetPasswordPage'])->name('store-reset-password');
Route::get('/user-verification/{token}', [RegisterController::class, 'userVerification'])->name('user-verification');

Route::post('/user-register',[RegisterController::class,'Register'])->name('user.store.register');
Route::get('/user-email-verify/{token}',[RegisterController::class,'VerifyEmail'])->name('user.email.verify');



Route::get('/user-email-verify/{token}',[RegisterController::class,'VerifyEmail'])->name('user.email.verify');


Route::get('/fjhkgh',function()
{
    return view('index');
});

Route::get('/product-details/{id}',[ProductDetailsController::class,'ProductDetails'])->name('user.product.details');


Route::get('/user-cart-delete/{id}',[CartController::class,'Deletecart'])->name('user.cart.product.delete');
Route::post('/user-cart-add-with-quantity',[CartController::class,'StorToCartWithQuantity'])->name('stor.cart.from.details');
Route::get('/user-cart-show',[CartController::class,'showAll'])->name('shopping.cart.show.all');

Route::resource('cart',CartController::class);

// Route::resource('checkout',CheckoutController::class);

Route::resource('CompleteOrder',CompleteOrderController::class);
Route::post('user-delete-order',[CompleteOrderController::class,'DeleteOrder'])->name('user.complet.order.delete');


Route::post('/products-specification',[ProductsController::class,'productReview'])->name('product.review.save');
Route::get('/product-by-category-id/{id}',[ProductsController::class,'productShowByCategory'])->name('user.product.by.category');
Route::get('products-show-by-brand/{id}',[ProductsController::class,'productShowByBrand'])->name('user.product.by.brand');
Route::resource('products',ProductsController::class);

Route::post('/user-blog-comments/{id}',[UserBlogController::class,'UserCommentsOnBlog'])->name('user.comment.on.blog.post');
Route::resource('userBlog',UserBlogController::class);

Route::resource('UserContact',UserContactUsController::class);

Route::resource('UserReview',UserProductReviewUsController::class);

Route::post('change-product-variant-by-user',[AdminProductVariantController::class,'VariantChangeByUser'])->name('product.variant.chnage.user');

Route::get('/complete-order',[CompleteOrderController::class,'CompleteOrder'])->name('Order.Complete.by.User');

Route::resource('User-about',UserAboutUsController::class);

Route::get('/ouer-privecy',[TermsConditionController::class,'Privecy'])->name('user.privecy');
Route::get('/our-terms-and-condition',[TermsConditionController::class,'TermsAndCondition'])->name('our.terms.and.condition');

Route::post('user-chnage-password',[UserController::class,'userChnagePassword'])->name('user.chnage.password');
Route::resource('UserInfo',UserController::class);
Route::resource('User-OurTeam',UserOurTeamController::class);
Route::resource('Subcription',SubscriptionController::class);

Route::get('/User-Pricing-Plan-index',[UserPricingPlanController::class,'index'])->name('pricing.plan.index');
Route::get('/User-Pricing-Plan-store/{id}',[UserPricingPlanController::class,'store'])->name('pricing.plan.store');
Route::get('/User-Pricing-Plan-show/{id}',[UserPricingPlanController::class,'store'])->name('pricing.plan.show');
Route::get('show-purches-pricing-plan/{id}',[UserPricingPlanController::class,'PurchesDetails'])->name('purches.plan.details');
Route::get('/User-Pricing-Plan-purches-index/{id}',[UserPricingPlanController::class,'purchesPlan'])->name('pricing.plan.purches.index');

Route::get('/User-why-chose-us',[UserWhyChooseUsController::class,'index'])->name('why.choose.us.index');


Route::resource('User-Services',UserServiceController::class);
Route::resource('User-ContactUs',UserContactUsController::class);
Route::resource('User-address',AddressController::class);


//................Payment.............//
Route::post('/paypal', [PaymentController::class, 'payWithpaypal'])->name('paypal');
Route::get('/paypal-payment-success-for-product', [PaymentController::class, 'paypalPaymentSuccess'])->name('paypal-payment-success-for-product');
Route::get('/paypal-payment-cancled-for-product', [PaymentController::class, 'paypalPaymentCancled'])->name('paypal-payment-cancled-for-product');
//...........................Stripe....................//
Route::post('/stripe-payment', [PaymentController::class, 'StripePayment'])->name('strip.payment');
//..................Razorpay Payment........................//
Route::post('/razorpay-payment', [PaymentController::class, 'RazorpayPayment'])->name('razorpay.payment');
//..................Flutterwave Payment........................//
Route::post('/flutterwave-payment', [PaymentController::class, 'paywithFlutterwave'])->name('flutterwave.payment');
//..................Paystack Payment........................//
Route::post('/paystack-payment', [PaymentController::class, 'paywithPaystack'])->name('pay.with.paystack');
//..................Instamojo Payment........................//
Route::post('/instamojo-payment', [PaymentController::class, 'paywithInstamojo'])->name('pay.with.instamojo-for-product');
Route::get('/response-instamojo-for-product', [PaymentController::class, 'instamojoResponse'])->name('response-instamojo-for-product');
