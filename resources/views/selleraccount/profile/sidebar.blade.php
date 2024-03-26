<div class="aiz-user-sidenav overflow-auto c-scrollbar-light px-4 pb-4">
    <div class="d-xl-none">
        <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static"
            data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
            <i class="fa fa-times la-2x"></i>
        </button>
    </div>
    <div class="p-4 text-center mb-4 border-bottom position-relative">
        <span class="avatar avatar-md mb-3">
            <img src="{{ asset('storage/user_images/iH91NfSR5oSTrgbZNyDVHZGB13bFZSgupPkWpG24.jpg') }}" alt="User Image">
        </span>
        
        <h4 class="h5 fs-14 mb-1 fw-700 text-dark">{{ Auth::user()->name }}</h4>
        <div class="text-truncate opacity-60 fs-12">{{ Auth::user()->email }}</div>
    </div>
    <div class="sidemnenu">
        <ul class="aiz-side-nav-list mb-3 pb-3 border-bottom" data-toggle="aiz-side-menu">
            <li class="aiz-side-nav-item">
                
                <a href="{{ route('seller.profile') }}" class="aiz-side-nav-link active">
                    <img src="../images/profilenav/home.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Dashboard</span>
                </a>
            </li>
            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.purchaseHistory') }}" class="aiz-side-nav-link">
                    <img src="../images/profilenav/analytics.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Purchase History</span>
                    <span class="badge badge-inline badge-success">new</span>
                </a>
            </li>

            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.downloads') }}" class="aiz-side-nav-link ">
                    <img src="../images/profilenav/arrows.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Downloads</span>
                </a>
            </li>

            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.refund') }}" class="aiz-side-nav-link ">
                    <img src="../images/profilenav/cashback.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Refund Requests</span>
                </a>
            </li>

            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.wishlist') }}" class="aiz-side-nav-link ">
                    <img src="../images/profilenav/wishlist.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Wishlist</span>
                </a>
            </li>
            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.classifiedProducts') }}" class="aiz-side-nav-link ">
                    <img src="../images/profilenav/returning-visitor.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Classified Products</span>
                </a>
            </li>
            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.Auction') }}" class="aiz-side-nav-link">
                    <img src="../images/profilenav/auction.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Auction</span>
                    <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2">
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('seller.Biddedproducts') }}" class="aiz-side-nav-link">
                            <span class="aiz-side-nav-text">Bidded Products</span>
                        </a>
                    </li>
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('seller.purchaseHistory') }}" class="aiz-side-nav-link">
                            <span class="aiz-side-nav-text">Purchase History</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- <li class="aiz-side-nav-item">
                <a href="{{ route('seller.conversations') }}" class="aiz-side-nav-link ">
                    <img src="../images/profilenav/live-chat.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Conversations</span>
                </a>
            </li> --}}

            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.mywallet') }}" class="aiz-side-nav-link ">
                    <img src="../images/profilenav/wallet.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">My Wallet</span>
                </a>
            </li>

            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.earnings') }}" class="aiz-side-nav-link ">
                    <img src="../images/profilenav/investment.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Earning Points</span>
                </a>
            </li>

            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.affiliate') }}" class="aiz-side-nav-link">
                    <img src="../images/profilenav/attachment.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Affiliate</span>
                    <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2">
                    <li class="aiz-side-nav-item">
                        <a href="AffliateHistory.php" class="aiz-side-nav-link ">
                            <span class="aiz-side-nav-text">Affiliate History</span>
                        </a>
                    </li>
                    <li class="aiz-side-nav-item">
                        <a href="PaymentHistory.php" class="aiz-side-nav-link">
                            <span class="aiz-side-nav-text">Payment History</span>
                        </a>
                    </li>
                    <li class="aiz-side-nav-item">
                        <a href="WithdrawRequestHistory.php" class="aiz-side-nav-link">
                            <span class="aiz-side-nav-text">Withdraw request history</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.support') }}" class="aiz-side-nav-link ">
                    <img src="../images/profilenav/chat.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Support Ticket</span>
                    <span class="badge badge-inline badge-success">1</span>
                </a>
            </li>
            

            <li class="aiz-side-nav-item">
                <a href="{{ route('seller.ManageAccount', ['user' => Auth::user()]) }}" class="aiz-side-nav-link">
                    <img src="../images/profilenav/manage.png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Manage Profile</span>
                </a>
            </li>
            

            <li class="aiz-side-nav-item">
                <a href="javascript:void(0);" class="aiz-side-nav-link">
                    <img src="../images/profilenav/delete (4).png" alt="" width="16" height="16" />
                    <span class="aiz-side-nav-text ml-3">Delete My Account</span>
                </a>
            </li>

        </ul>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary btn-block fs-14 fw-700 mb-5 mb-md-0" style="border-radius: 25px;">Sign Out</button>
        </form>
        
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var menuItems = document.querySelectorAll('.aiz-side-nav-link');

        menuItems.forEach(function (item) {
            item.addEventListener('click', function () {
                menuItems.forEach(function (menuItem) {
                    menuItem.classList.remove('active');
                });

                item.classList.add('active');
                sessionStorage.setItem('activeMenuItem', item.getAttribute('href'));
            });
        });

        var storedActiveMenuItem = sessionStorage.getItem('activeMenuItem');
        if (storedActiveMenuItem) {
            var activeMenuItem = document.querySelector('a[href="' + storedActiveMenuItem + '"]');
            if (activeMenuItem) {
                menuItems.forEach(function (menuItem) {
                    menuItem.classList.remove('active');
                });
                activeMenuItem.classList.add('active');
            }
        }
    });
</script>