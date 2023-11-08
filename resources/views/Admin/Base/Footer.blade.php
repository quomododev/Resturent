		<!-- Sherah Scripts -->
		
		<script src="{{asset('admin/js/jquery.min.js')}}"></script>
		<script src="{{asset('admin/js/jquery-migrate.js')}}"></script>
		<script src="{{asset('admin/js/jquery-ui.min.js')}}"></script>
		<script src="{{asset('admin/js/popper.min.js')}}"></script>
		<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('admin/js/charts.js')}}"></script>
		<script src="{{asset('admin/js/datatables.min.js')}}"></script> 
		<script src="{{asset('admin/js/circle-progress.min.js')}}"></script>
		<script src="{{asset('admin/js/jquery-jvectormap.js')}}"></script>
		<script src="{{asset('admin/js/jvector-map.js')}}"></script>
		<script src="{{asset('admin/js/slickslider.min.js')}}"></script>
		<script src="{{asset('admin/js/main.js')}}"></script>

				 <!--====== Toaster CDN ======-->
				 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		<script src="{{asset('admin/js/bootstrapicon-iconpicker.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<style>
			.btn-success {
				color: #fff;
				margin-left: 20px;
				background-color: #198754;
				border-color: #198754;
			}
		</style>

		@if(Session::has('message'))
				<script>
					toastr.options = {
						"progressBar" : true,
						"closeButton" : true,
						}
						var type="{{Session::get('alert-type','info')}}"
						switch(type){
							case 'info':
								toastr.info("{{ Session::get('message') }}");
								break;
							case 'success':
								toastr.success("{{ Session::get('message') }}");
								break;
							case 'warning':
								toastr.warning("{{ Session::get('message') }}");
								break;
							case 'error':
								toastr.error("{{ Session::get('message') }}");
								break;
						}
			</script>	
		@endif

		@if($errors->any())
			@foreach($errors->all() as $error)
				<script>
					toastr.error("{{ $error }}");
				</script>
			@endforeach
		@endif
	
	<script>
		 $(document).ready(function() {
			$('.select2').select2();
		});
		function message()
		{
			Swal.fire({
			position: 'bottom-end',
			icon: 'success',
			title: 'Status Changed Successfully!',
			showConfirmButton: false,
			timer: 500
			})
		}
		function confirmation(ev) {
			ev.preventDefault();
			var urlToRedirect = ev.currentTarget.getAttribute('href');  
			console.log(urlToRedirect);
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn btn-danger',
				},
				buttonsStyling: false
				})
				swalWithBootstrapButtons.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Yes, delete it!',
				cancelButtonText: 'No, cancel!',
				reverseButtons: true
				}).then((result) => {
				if (result.isConfirmed) {
					swalWithBootstrapButtons.fire(
					'Deleted!',
					'Your file has been deleted.',
					'success'
					)
					window.location.href = urlToRedirect;
				} else if (
					result.dismiss === Swal.DismissReason.cancel
				) {
					swalWithBootstrapButtons.fire(
					'Cancelled',
					'Your imaginary file is safe :)',
					'error'
					)
				}
				})
		}
	</script>
		
<script>
    // initialize the icon picker and done
    $('.iconpicker').iconpicker({
        title: 'Pick an Icon',
        selected: false,
        defaultValue: false,
        placement: "bottom",
        collision: "none",
        animation: true,
        hideOnSelect: true,
        showFooter: true,
        searchInFooter: false,
        mustAccept: false,
        selectedCustomClass: "bg-primary",
        fullClassFormatter: function (e) {
            return e;
        },
        input: "input,.iconpicker-input",
        inputSearch: false,
        container: false,
        component: ".input-group-addon,.iconpicker-component",
        templates: {
            popover: '<div class="iconpicker-popover popover" role="tooltip"><div class="arrow"></div>' + '<div class="popover-title"></div><div class="popover-content"></div></div>',
            footer: '<div class="popover-footer"></div>',
            buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' + ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
            search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
            iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
            iconpickerItem: '<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'
        }
    });
	</script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-1VDDWMRSTH"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-1VDDWMRSTH');
		</script>
		<script>
		try {
		fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
			return true;
		}).catch(function(e) {
			var carbonScript = document.createElement("script");
			carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
			carbonScript.id = "_carbonads_js";
			document.getElementById("carbon-block").appendChild(carbonScript);
		});
		} catch (error) {
		console.log(error);
		}
	</script>

	</body>
</html>