 <!--**********************************
            Sidebar start
        ***********************************-->
		@if(Auth::guard('admin')->user()->type=="superadmin")
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li class="menu-title">YOUR COMPANY</li>
					<li><a href="{{ url('admin/dashboard') }}" class="" aria-expanded="false">
						<div class="menu-icon">
                            <?xml version="1.0" ?><svg height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(1 1)"><path d="m.5 9.5 9-9 9 9"/><path d="m2.5 10.5v4c0 1.1045695.8954305 2 2 2h10c1.1045695 0 2-.8954305 2-2v-4"/></g></svg>
						</div>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li><a href="employee.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg data-name="Capa 1" id="Capa_1" width="20" height="20" viewBox="0 0 20 19.84" xmlns="http://www.w3.org/2000/svg"><path d="M15.6,3.89H4.4A2.35,2.35,0,0,0,2.05,6.24v.1A2.36,2.36,0,0,0,4.4,8.69s0,0,.06,0V14.3A1.66,1.66,0,0,0,6.12,16h7.77a1.65,1.65,0,0,0,1.65-1.65V8.67l.06,0A2.36,2.36,0,0,0,18,6.34v-.1A2.35,2.35,0,0,0,15.6,3.89ZM13.89,15.36H6.12A1.07,1.07,0,0,1,5.06,14.3V6.71H15V14.3A1.07,1.07,0,0,1,13.89,15.36Zm3.46-9A1.76,1.76,0,0,1,15.6,8.09l-.06,0V6.71h.63a.3.3,0,0,0,.3-.3.29.29,0,0,0-.3-.3H3.84a.3.3,0,0,0-.3.3.31.31,0,0,0,.3.3h.62v1.4l-.06,0A1.76,1.76,0,0,1,2.65,6.34v-.1A1.75,1.75,0,0,1,4.4,4.49H15.6a1.75,1.75,0,0,1,1.75,1.75Z"/><path d="M11.39,10.44l-1,1.28V9.52A.32.32,0,0,0,10,9.19a.33.33,0,0,0-.33.33v2.27L8.45,10.54a.33.33,0,0,0-.47,0A.32.32,0,0,0,8,11l1.85,1.86a.34.34,0,0,0,.24.09h0a.3.3,0,0,0,.24-.12l1.59-2a.33.33,0,0,0-.52-.41Z"/></svg>
						</div>
							<span class="nav-text">POS</span>
						</a>
					</li>
					<li class="menu-title">ORDER MANAGEMENT</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="nav-text">Order</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="task.html">All</a></li>
							<li><a href="task-summary.html">Pending</a></li>
							<li><a href="task-summary.html">Confirmed</a></li>
							<li><a href="task-summary.html">Packaging</a></li>
							<li><a href="task-summary.html">Out for Delivery</a></li>
							<li><a href="task-summary.html">Delivered</a></li>
							<li><a href="task-summary.html">Returned</a></li>
							<li><a href="task-summary.html">Failed to Deliver</a></li>
							<li><a href="task-summary.html">Canceled</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
                            <?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 3)"><path d="m6.5.5h-4c-1.1045695 0-2 .8954305-2 2v10c0 1.1045695.8954305 2 2 2h10c1.1045695 0 2-.8954305 2-2v-10"/><path d="m10.5 7.5-3 3-3-3"/><path d="m14.5.5h-4c-1.65685425 0-3 1.34314575-3 3v7"/></g></svg>
						</div>
						<span class="nav-text">Refund Request</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="task-summary.html">Pending</a></li>
							<li><a href="task-summary.html">Approved</a></li>
							<li><a href="task-summary.html">Refunded</a></li>
							<li><a href="task-summary.html">Rejected</a></li>
						</ul>
					</li>
					<li class="menu-title">PRODUCT MANAGEMENT</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="nav-text">Catalogue Setup</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ url('admin/sections') }}">Sections</a></li>
							<li><a href="{{ url('admin/categories') }}">Categories</a></li>
							<li><a href="">Sub Categories</a></li>
							<li><a href="">Sub Sub Categories</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.0122 1.82893L11.6874 5.17545C11.8515 5.50399 12.1684 5.73179 12.5359 5.78451L16.2832 6.32391C17.2091 6.45758 17.5775 7.57968 16.9075 8.22262L14.1977 10.8264C13.9314 11.0825 13.8101 11.4505 13.8731 11.812L14.5126 15.488C14.6701 16.3974 13.7023 17.0911 12.8747 16.6609L9.52545 14.9241C9.1971 14.7537 8.80385 14.7537 8.47455 14.9241L5.12525 16.6609C4.29771 17.0911 3.32986 16.3974 3.48831 15.488L4.12686 11.812C4.18986 11.4505 4.06864 11.0825 3.80233 10.8264L1.09254 8.22262C0.422489 7.57968 0.790922 6.45758 1.71678 6.32391L5.4641 5.78451C5.83158 5.73179 6.14942 5.50399 6.31359 5.17545L7.98776 1.82893C8.40201 1.00148 9.59799 1.00148 10.0122 1.82893Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Brand</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="ui-accordion.html">Add New</a></li>
							<li><a href="ui-alert.html">List</a></li>
						</ul>
					</li>
					<li><a href="project.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="22" viewBox="0 0 22 22" width="22" xmlns="http://www.w3.org/2000/svg"><g fill="none" stroke="#888888" fill-rule="evenodd" transform="translate(3 4)"><path d="m3.04312645.77339244c1.30458237-.50251803 2.79020688-.75708722 4.45687355-.76370756 1.66666667-.00645659 3.1522912.2481126 4.4568735.76370756 1.4533332.41523806 2.3707846 1.84683012 2.1409518 3.3407434l-1.0760143 6.99409286c-.3002042 1.9513268-1.9792025 3.3917713-3.95348683 3.3917713h-3.13664834c-1.97428433 0-3.65328268-1.4404445-3.95348679-3.3917713l-1.0760143-6.99409286c-.22983281-1.49391328.68761852-2.92550534 2.14095171-3.3407434z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="m7.5 6c3.5555556 0 5-1.5 5-2.5s-1.4444444-2.25-5-2.25c-3.55555556 0-5 1.25-5 2.25s1.44444444 2.5 5 2.5z" fill="currentColor"/></g></svg>
						</div>
							<span class="nav-text">Product Attributes</span>
						</a>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="22" viewBox="0 0 22 22" width="22" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" transform="translate(1 1)"><path d="m.5 9.5 9-9 9 9"/><path d="m2.5 7.5v7c0 1.1045695.8954305 2 2 2h10c1.1045695 0 2-.8954305 2-2v-7"/><path d="m6.5 10.5 2 2 4-4"/></g></svg>
						</div>
							<span class="nav-text">InHouse Products</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="ui-accordion.html">Products</a></li>
							<li><a href="ui-alert.html">Bulk Import</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.3691 18.7157C18.086 18.7157 19.4784 17.3242 19.4793 15.6073V15.6055V13.1305C18.3454 13.1305 17.4269 12.212 17.426 11.078C17.426 9.94504 18.3445 9.02562 19.4784 9.02562H19.4793V6.55062C19.4812 4.83279 18.0906 3.43946 16.3737 3.43762H16.3682H5.63216C3.91433 3.43762 2.52191 4.82912 2.521 6.54696V6.54787V9.10537C3.6155 9.06687 4.53308 9.92304 4.57158 11.0175C4.5725 11.0377 4.57341 11.0579 4.57341 11.078C4.57433 12.2101 3.65858 13.1286 2.5265 13.1305H2.521V15.6055C2.52008 17.3224 3.9125 18.7157 5.62941 18.7157H5.63033H16.3691Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.3403 8.30788L11.905 9.45096C11.96 9.5628 12.0663 9.64071 12.1901 9.65905L13.4523 9.8433C13.7649 9.88913 13.8887 10.2723 13.6632 10.4914L12.7502 11.3805C12.6603 11.4676 12.62 11.5932 12.6402 11.717L12.8556 12.9728C12.9087 13.2835 12.5833 13.52 12.3047 13.3734L11.1762 12.7803C11.0653 12.7216 10.9333 12.7216 10.8224 12.7803L9.69491 13.3734C9.41533 13.52 9.08991 13.2835 9.14308 12.9728L9.3585 11.717C9.37958 11.5932 9.33833 11.4676 9.2485 11.3805L8.33641 10.4914C8.11091 10.2723 8.23466 9.88913 8.54633 9.8433L9.80858 9.65905C9.93233 9.64071 10.0396 9.5628 10.0946 9.45096L10.6583 8.30788C10.7977 8.02555 11.201 8.02555 11.3403 8.30788Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Seller Products</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="ui-accordion.html">Updated Products</a></li>
							<li><a href="ui-accordion.html">New Products</a></li>
							<li><a href="ui-accordion.html">Approved Products</a></li>
							<li><a href="ui-accordion.html">Denied Products</a></li>
						</ul>
					</li>
					<li class="menu-title">PROMOTION MANAGEMENT</li>
					<li><a href="reports.html" class="" aria-expanded="false">
						<div class="menu-icon">
                            <?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(1 2)"><path d="m16.5 12.5v-10.01471863h-14v10.01471863c0 .5522847.44771525 1 1 1h12c.5522847 0 1-.4477153 1-1z"/><path d="m7.5 13.5-2 3.5"/><path d="m13.5 13.5-2 3" transform="matrix(-1 0 0 1 25 0)"/><path d="m.5 2.5h18"/><path d="m9.49894742.49789429c1.05502148.00261296 1.91822238.81840641 1.99543358 1.85289779l.0056181.1492082-4.00000003-.00210599c-.00105165-1.1045695.89437885-2 1.99894835-2z"/></g></svg>
						</div>
							<span class="nav-text">Banners</span>
						</a>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
                            <?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 4)"><path d="m1.5 6.5h12v5c0 1.1045695-.8954305 2-2 2h-8c-1.1045695 0-2-.8954305-2-2z"/><path d="m7.5 3.5v10"/><path d="m4.5 3.5h3v-2c0-1.5-2.21895142-1.78104858-3-1s-.78104858 2.21895142 0 3zm6 0h-3v-2c0-1.5 2.21895142-1.78104858 3-1 .7810486.78104858.7810486 2.21895142 0 3zm-9 0h12c.5522847 0 1 .44771525 1 1v1c0 .55228475-.4477153 1-1 1h-12c-.55228475 0-1-.44771525-1-1v-1c0-.55228475.44771525-1 1-1z"/></g></svg>
						</div>
							<span class="nav-text">Offers & Deals</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="ui-accordion.html">Coupon</a></li>
							<li><a href="ui-accordion.html">Flash Deals</a></li>
							<li><a href="ui-accordion.html">Deal of the day</a></li>
							<li><a href="ui-accordion.html">Featured Deal</a></li>
						</ul>
					</li>
					<li><a href="manage-client.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(2 1)"><path d="m6.5 17.5h4"/><path d="m8.5 4c2.4852814 0 4.5 2.01471863 4.5 4.5 0 1.7663751-1.017722 3.2950485-2.4987786 4.031633l-.0012214.968367c0 1.1045695-.8954305 2-2 2s-2-.8954305-2-2l-.00021218-.9678653c-1.48160351-.7363918-2.49978782-2.2653584-2.49978782-4.0321347 0-2.48528137 2.01471863-4.5 4.5-4.5z"/><path d="m8.5 1.5v-1"/><path d="m13.5 3.5 1-1"/><path d="m2.5 3.5 1-1" transform="matrix(-1 0 0 1 6 0)"/><path d="m13.5 13.5 1-1" transform="matrix(1 0 0 -1 0 26)"/><path d="m2.5 13.5 1-1" transform="matrix(-1 0 0 -1 6 26)"/><path d="m1.5 7.5h-1"/><path d="m16.5 7.5h-1"/></g></svg>
						</div>
							<span class="nav-text">Push Notification</span>
						</a>
					</li>
					<li><a href="blog.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 2)"><path d="m1.5 5.5h3l5-5v16l-5-5h-3c-.55228475 0-1-.4477153-1-1v-4c0-.55228475.44771525-1 1-1zm10 8c1.3333333-1 2-2.6666667 2-5 0-2.33333333-.6666667-4-2-5"/><path d="m11.5 6.5v4"/></g></svg>

						</div>
						<span class="nav-text">Announcement</span>
						</a>
					</li>
					<li class="menu-title">HELP & SUPPORT SECTIONS</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(1 2)"><path d="m.5 7 16-6.535-2.8 14.535z"/><path d="m16.5.5-11 10"/><path d="m5.5 10.5v5l3-3"/></g></svg>
						</div>
						<span class="nav-text">Messages <span class="badge badge-danger badge-xs ms-1">2</span></span>
						</a>

					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(1 2)"><path d="m16.5 12.5v-10c0-1.1045695-.8954305-2-2-2h-8c-1.1045695 0-2 .8954305-2 2v10c0 1.1045695.8954305 2 2 2h8c1.1045695 0 2-.8954305 2-2z"/><path d="m4.30542777 2.93478874-2.00419132.72946598c-1.03795581.37778502-1.57312998 1.52546972-1.19534496 2.56342553l3.42020143 9.39692625c.37778502 1.0379558 1.52546972 1.5731299 2.56342553 1.1953449l5.56843115-2.1980811"/><path d="m7.5 5.5h5"/><path d="m7.5 7.5h6"/><path d="m7.5 9.5h3"/></g></svg>
						</div>
						<span class="nav-text">Support Tickets <span class="badge badge-danger badge-xs ms-1">1</span></span>
						</a>

					</li>
					<li class="menu-title">REPORTS & ANALYSIS</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M14.8381 11.7317C15.4566 11.7317 15.9757 12.2422 15.8811 12.853C15.3263 16.4463 12.2502 19.1143 8.54009 19.1143C4.43536 19.1143 1.10834 15.7873 1.10834 11.6835C1.10834 8.30245 3.67693 5.15297 6.56878 4.44087C7.19018 4.28745 7.82702 4.72455 7.82702 5.36429C7.82702 9.69868 7.97272 10.8199 8.79579 11.4297C9.61886 12.0396 10.5867 11.7317 14.8381 11.7317Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M18.8848 8.12229C18.934 5.33755 15.5134 0.848777 11.345 0.92597C11.0208 0.93176 10.7612 1.20194 10.7468 1.52518C10.6416 3.81492 10.7834 6.78202 10.8626 8.12711C10.8867 8.54588 11.2157 8.87492 11.6335 8.89904C13.0162 8.97816 16.0914 9.08623 18.3483 8.74465C18.6552 8.69834 18.88 8.43202 18.8848 8.12229Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Sales & Reports</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="chart-flot.html">Earning Reports</a></li>
							<li><a href="chart-morris.html">Inhouse Sales</a></li>
							<li><a href="chart-chartjs.html">Seller Report</a></li>
							<li><a href="chart-chartist.html">Transaction Report</a></li>
						</ul>
					</li>
					<li><a href="widget-basic.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(-1 -1)"><path d="m14.517 3.5 4.983 5v6l-4.983 5h-6.017l-5-5v-6l5-5z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="m11.5 12.5v-5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><circle cx="11.5" cy="15.5" fill="currentColor" r="1"/></g></svg>
						</div>
							<span class="nav-text">Product Report</span>
						</a>
					</li>
					<li><a href="widget-basic.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Order Report</span>
						</a>
					</li>
					<li class="menu-title">USER MANAGEMENT</li>
                    <li><a href="{{ url('admin/admins') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(1 2)"><path d="m7.5.5c1.65685425 0 3 1.34314575 3 3v2c0 1.65685425-1.34314575 3-3 3s-3-1.34314575-3-3v-2c0-1.65685425 1.34314575-3 3-3zm7 14v-.7281753c0-3.1864098-3.6862915-5.2718247-7-5.2718247s-7 2.0854149-7 5.2718247v.7281753c0 .5522847.44771525 1 1 1h12c.5522847 0 1-.4477153 1-1z"/><path d="m11.5199327.67783074c1.1547685.41741154 1.9800673 1.52341097 1.9800673 2.82216926v1c0 1.29707884-.8475766 2.5813505-2 3 .6742649-.91876977 1.0109204-2.0857069 1.0099664-3.50081137s-.3309652-2.52222377-.9900337-3.32135789zm4.9800673 14.82216926h1c.5522847 0 1-.4477153 1-1 0-.2427251 0-.4854502 0-.7281753 0-2.1698712-1.7094418-3.82917861-3.8465775-4.66705336 0 0 2.8465775 2.39522866 1.8465775 6.39522866z" fill="currentColor"/></g></svg>
						</div>
							<span class="nav-text">Admins</span>
						</a>
					</li>
                    <li><a href="{{ url('admin/admins/subadmin') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 2)"><path d="m7.5.5c1.65685425 0 3 1.34314575 3 3v2c0 1.65685425-1.34314575 3-3 3s-3-1.34314575-3-3v-2c0-1.65685425 1.34314575-3 3-3z"/><path d="m16.5 4.5h-4"/><path d="m14.5 14.5v-.7281753c0-3.1864098-3.6862915-5.2718247-7-5.2718247s-7 2.0854149-7 5.2718247v.7281753c0 .5522847.44771525 1 1 1h12c.5522847 0 1-.4477153 1-1z"/></g></svg>
						</div>
							<span class="nav-text">Sub Admins</span>
						</a>
					</li>
					<li><a class="has-arrow " href="admin/admins/user" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><path d="m7.5.5c1.65685425 0 3 1.34314575 3 3v2c0 1.65685425-1.34314575 3-3 3s-3-1.34314575-3-3v-2c0-1.65685425 1.34314575-3 3-3zm7 14v-.7281753c0-3.1864098-3.6862915-5.2718247-7-5.2718247s-7 2.0854149-7 5.2718247v.7281753c0 .5522847.44771525 1 1 1h12c.5522847 0 1-.4477153 1-1z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 2)"/></svg>
						</div>
							<span class="nav-text">Customers</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="uc-select2.html">Customer List</a></li>
							<li><a href="uc-nestable.html">Customer Reviews</a></li>
							<li><a href="uc-noui-slider.html">Wallet</a></li>
							<li><a href="uc-sweetalert.html">Loyalty Points</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="#" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(2 2)"><circle cx="8.5" cy="8.5" r="8"/><path d="m14.5 13.5c-.6615287-2.2735217-3.1995581-3.0251263-6-3.0251263-2.72749327 0-5.27073171.8688092-6 3.0251263"/><path d="m8.5 2.5c1.6568542 0 3 1.34314575 3 3v2c0 1.65685425-1.3431458 3-3 3-1.65685425 0-3-1.34314575-3-3v-2c0-1.65685425 1.34314575-3 3-3z"/></g></svg>
						</div>
							<span class="nav-text">All Vendors</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="uc-select2.html">Add New Vendor</a></li>
							<li><a href="{{ url('admin/admins/vendor') }}">Vendor List</a></li>
							<li><a href="uc-noui-slider.html">Withdraws</a></li>
							<li><a href="uc-sweetalert.html">Withdrawal Methods</a></li>
						</ul>
					</li>
					<li><a href="{{ url('admin/admins/subscribers') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="22" viewBox="0 0 22 22" width="22" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(2 2)"><path d="m2.5.5h12c1.1045695 0 2 .8954305 2 2v12c0 1.1045695-.8954305 2-2 2h-12c-1.1045695 0-2-.8954305-2-2v-12c0-1.1045695.8954305-2 2-2z"/><path d="m.5 4.5h16"/><path d="m3.5 7.5v6"/><path d="m5.5 7.5v6"/><path d="m7.5 7.5v6"/><path d="m9.5 7.5v6"/><path d="m11.5 7.5v6"/><path d="m13.5 7.5v6"/></g></svg>
						</div>
							<span class="nav-text">Subscribers</span>
						</a>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M18.634 13.4211C18.634 16.7009 16.7007 18.6342 13.4209 18.6342H6.28738C2.99929 18.6342 1.06238 16.7009 1.06238 13.4211V6.27109C1.06238 2.99584 2.26688 1.06259 5.54763 1.06259H7.38096C8.03913 1.06351 8.65879 1.37242 9.05296 1.89951L9.88988 3.01234C10.2859 3.53851 10.9055 3.84834 11.5637 3.84926H14.1579C17.446 3.84926 18.6596 5.52309 18.6596 8.86984L18.634 13.4211Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M5.85754 12.2577H13.8646" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Delivery-man</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="uc-select2.html">Add New</a></li>
							<li><a href="uc-nestable.html">List</a></li>
							<li><a href="uc-noui-slider.html">Chat</a></li>
							<li><a href="uc-sweetalert.html">Emergency Contact</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M18.634 13.4211C18.634 16.7009 16.7007 18.6342 13.4209 18.6342H6.28738C2.99929 18.6342 1.06238 16.7009 1.06238 13.4211V6.27109C1.06238 2.99584 2.26688 1.06259 5.54763 1.06259H7.38096C8.03913 1.06351 8.65879 1.37242 9.05296 1.89951L9.88988 3.01234C10.2859 3.53851 10.9055 3.84834 11.5637 3.84926H14.1579C17.446 3.84926 18.6596 5.52309 18.6596 8.86984L18.634 13.4211Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M5.85754 12.2577H13.8646" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Employees</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="uc-select2.html">Role Setup</a></li>
							<li><a href="uc-nestable.html">Employees</a></li>
						</ul>
					</li>
					<li class="menu-title">SYSTEM SETTINGS</li>
					<li><a href="widget-basic.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Business Setup</span>
						</a>
					</li>
					<li><a href="widget-basic.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">3rd Party</span>
						</a>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.4065 14.8714H7.78821" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M14.4065 11.0338H7.78821" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M10.3137 7.2051H7.78827" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.5829 2.52066C14.5829 2.52066 7.54563 2.52433 7.53463 2.52433C5.00463 2.53991 3.43805 4.20458 3.43805 6.74374V15.1734C3.43805 17.7254 5.01655 19.3965 7.56855 19.3965C7.56855 19.3965 14.6049 19.3937 14.6168 19.3937C17.1468 19.3782 18.7143 17.7126 18.7143 15.1734V6.74374C18.7143 4.19174 17.1349 2.52066 14.5829 2.52066Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>

							<span class="nav-text">Pages & Media</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="form-element.html">Pages</a></li>
							<li><a href="form-wizard.html">Social Media Links</a></li>
							<li><a href="form-ckeditor.html">Gallery</a></li>
						</ul>
					</li>
					<li><a href="widget-basic.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">System Setup</span>
						</a>
					</li>
				</ul>
			</div>
        </div>
        @else
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li class="menu-title">YOUR COMPANY</li>
					<li><a class="has-arrow " href="{{ url('admin/dashboard') }}" aria-expanded="false">
						<div class="menu-icon">
                            <?xml version="1.0" ?><svg height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(1 1)"><path d="m.5 9.5 9-9 9 9"/><path d="m2.5 10.5v4c0 1.1045695.8954305 2 2 2h10c1.1045695 0 2-.8954305 2-2v-4"/></g></svg>
						</div>
						<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li><a href="employee.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<div class="menu-icon">
                                <?xml version="1.0" ?><svg data-name="Capa 1" id="Capa_1" width="20" height="20" viewBox="0 0 20 19.84" xmlns="http://www.w3.org/2000/svg"><path d="M15.6,3.89H4.4A2.35,2.35,0,0,0,2.05,6.24v.1A2.36,2.36,0,0,0,4.4,8.69s0,0,.06,0V14.3A1.66,1.66,0,0,0,6.12,16h7.77a1.65,1.65,0,0,0,1.65-1.65V8.67l.06,0A2.36,2.36,0,0,0,18,6.34v-.1A2.35,2.35,0,0,0,15.6,3.89ZM13.89,15.36H6.12A1.07,1.07,0,0,1,5.06,14.3V6.71H15V14.3A1.07,1.07,0,0,1,13.89,15.36Zm3.46-9A1.76,1.76,0,0,1,15.6,8.09l-.06,0V6.71h.63a.3.3,0,0,0,.3-.3.29.29,0,0,0-.3-.3H3.84a.3.3,0,0,0-.3.3.31.31,0,0,0,.3.3h.62v1.4l-.06,0A1.76,1.76,0,0,1,2.65,6.34v-.1A1.75,1.75,0,0,1,4.4,4.49H15.6a1.75,1.75,0,0,1,1.75,1.75Z"/><path d="M11.39,10.44l-1,1.28V9.52A.32.32,0,0,0,10,9.19a.33.33,0,0,0-.33.33v2.27L8.45,10.54a.33.33,0,0,0-.47,0A.32.32,0,0,0,8,11l1.85,1.86a.34.34,0,0,0,.24.09h0a.3.3,0,0,0,.24-.12l1.59-2a.33.33,0,0,0-.52-.41Z"/></svg>
                            </div>
						</div>
							<span class="nav-text">POS</span>
						</a>
					</li>
					<li class="menu-title">ORDER MANAGEMENT</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="nav-text">Order</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="task.html">All</a></li>
							<li><a href="task-summary.html">Pending</a></li>
							<li><a href="task-summary.html">Confirmed</a></li>
							<li><a href="task-summary.html">Packaging</a></li>
							<li><a href="task-summary.html">Out for Delivery</a></li>
							<li><a href="task-summary.html">Delivered</a></li>
							<li><a href="task-summary.html">Returned</a></li>
							<li><a href="task-summary.html">Failed to Deliver</a></li>
							<li><a href="task-summary.html">Canceled</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<div class="menu-icon">
                                <?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 3)"><path d="m6.5.5h-4c-1.1045695 0-2 .8954305-2 2v10c0 1.1045695.8954305 2 2 2h10c1.1045695 0 2-.8954305 2-2v-10"/><path d="m10.5 7.5-3 3-3-3"/><path d="m14.5.5h-4c-1.65685425 0-3 1.34314575-3 3v7"/></g></svg>
                            </div>
						</div>
						<span class="nav-text">Refund Request</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="task-summary.html">Pending</a></li>
							<li><a href="task-summary.html">Approved</a></li>
							<li><a href="task-summary.html">Refunded</a></li>
							<li><a href="task-summary.html">Rejected</a></li>
						</ul>
					</li>
					<li class="menu-title">PRODUCT MANAGEMENT</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
                            <?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(0 1)"><path d="m3.5 6.5 7-4 5.9922779 3.42415879c.62315.35608571 1.0077221 1.01877259 1.0077221 1.73648628v4.67870983c0 .7177137-.3845721 1.3804006-1.0077221 1.7364863l-5 2.8571429c-.6148654.3513516-1.3696904.3513516-1.98455578 0l-5-2.8571429c-.62314999-.3560857-1.00772212-1.0187726-1.00772212-1.7364863 0-1.2454967 0-2.1796192 0-2.8023676"/><path d="m9.55180035 9.98943096c.59195265.31874374 1.30444665.31874374 1.89639925 0l5.5518004-2.98943096"/><path d="m10.5 10.5v6.5"/><path d="m3.5 6.5 7 4-3 1-7-4z"/><path d="m10.5 2.5 7 4 2-2-7-4z"/></g></svg>
						</div>
						<span class="nav-text">Products</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="chat.html">Products</a></li>
							<li><a href="chat.html">Bulk Import</a></li>
						</ul>
					</li>
					<li><a href="project.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<?xml version="1.0" ?><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m3.5 7.5h13.978"/><path d="m3.5 9.5h13.978"/><path d="m3.5 11.5h13.978"/><path d="m3.5 5.5h7"/><path d="m3.5 13.5h13.978"/><path d="m3.5 15.5h13.978"/></g></svg>
						</div>
							<span class="nav-text">Product Reviews</span>
						</a>
					</li>
					<li class="menu-title">PROMOTION MANAGEMENT</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>

						</div>
							<span class="nav-text">Offers & Deals</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="ui-accordion.html">Coupon</a></li>
						</ul>
					</li>
					<li class="menu-title">HELP & SUPPORT SECTIONS</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.11086 10.2878V13.7208" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M8.86244 12.0045H5.35974" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.0856 10.3924H12.9875" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M14.748 13.6691H14.6499" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M6.39948 0.833328C6.39948 1.5121 6.96092 2.06236 7.65349 2.06236H8.62193C9.69042 2.06617 10.5559 2.9144 10.5608 3.9616V4.5804" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.0593 19.1324C11.3045 19.1791 8.60026 19.1771 5.94166 19.1324C2.99069 19.1324 0.833313 17.0275 0.833313 14.1354V9.87325C0.833313 6.98107 2.99069 4.8762 5.94166 4.8762C8.61483 4.83051 11.321 4.83146 14.0593 4.8762C17.0102 4.8762 19.1666 6.98203 19.1666 9.87325V14.1354C19.1666 17.0275 17.0102 19.1324 14.0593 19.1324Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="nav-text">Messages <span class="badge badge-danger badge-xs ms-1">2</span></span>
						</a>
					</li>

					<li class="menu-title">REPORTS & ANALYSIS</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M14.8381 11.7317C15.4566 11.7317 15.9757 12.2422 15.8811 12.853C15.3263 16.4463 12.2502 19.1143 8.54009 19.1143C4.43536 19.1143 1.10834 15.7873 1.10834 11.6835C1.10834 8.30245 3.67693 5.15297 6.56878 4.44087C7.19018 4.28745 7.82702 4.72455 7.82702 5.36429C7.82702 9.69868 7.97272 10.8199 8.79579 11.4297C9.61886 12.0396 10.5867 11.7317 14.8381 11.7317Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M18.8848 8.12229C18.934 5.33755 15.5134 0.848777 11.345 0.92597C11.0208 0.93176 10.7612 1.20194 10.7468 1.52518C10.6416 3.81492 10.7834 6.78202 10.8626 8.12711C10.8867 8.54588 11.2157 8.87492 11.6335 8.89904C13.0162 8.97816 16.0914 9.08623 18.3483 8.74465C18.6552 8.69834 18.88 8.43202 18.8848 8.12229Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Sales & Reports</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="chart-chartist.html">Transaction Report</a></li>
						</ul>
					</li>
					<li><a href="widget-basic.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Product Report</span>
						</a>
					</li>
					<li><a href="widget-basic.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Order Report</span>
						</a>
					</li>
					<li class="menu-title">BUSINESS SECTION</li>
					<li><a href="widget-basic.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Shipping Method</span>
						</a>
					</li>
					<li><a href="widget-basic.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Withdraws</span>
						</a>
					</li>
					<li><a href="{{ url('admin/vendor-profile/bank') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">My Bank Info</span>
						</a>
					</li>
                    <li><a href="{{ url('admin/vendor-profile/shop') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">My Shop</span>
						</a>
					</li>

					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M18.634 13.4211C18.634 16.7009 16.7007 18.6342 13.4209 18.6342H6.28738C2.99929 18.6342 1.06238 16.7009 1.06238 13.4211V6.27109C1.06238 2.99584 2.26688 1.06259 5.54763 1.06259H7.38096C8.03913 1.06351 8.65879 1.37242 9.05296 1.89951L9.88988 3.01234C10.2859 3.53851 10.9055 3.84834 11.5637 3.84926H14.1579C17.446 3.84926 18.6596 5.52309 18.6596 8.86984L18.634 13.4211Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M5.85754 12.2577H13.8646" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Delivery-man</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="uc-select2.html">Add New</a></li>
							<li><a href="uc-nestable.html">List</a></li>
							<li><a href="uc-noui-slider.html">Chat</a></li>
							<li><a href="uc-sweetalert.html">Emergency Contact</a></li>
						</ul>
					</li>
				</ul>
			</div>
        </div>
        @endif



        <!--**********************************
            Sidebar end
        ***********************************-->
