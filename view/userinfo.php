        <style>
            .slide{
                display: none;
            }
        </style>
        <!-- CONTAINER -->
        <div class="container container_user">
            <h3>Thông tin cá nhân</h3>
            <div class="container_user_listInfo">
                <div class="container_user_listInfo--story active" data-tab="1">Tài khoản của tôi</div>
                <div class="container_user_listInfo--story" data-tab="2">Lịch sử mua vé</div>
            </div>
            <div class="login_cente_user login_center_user container_user_Tab active" data-tab="1">
                <div class="login_cente_bottomList">
                    <div class="login_cente_bottom--name">
                        <div class="login_cente_bottom--nameText">Họ</div>
                        <input type="text" text="" class="login_cente_bottom--NameInput login_cente_bottom--NameInputW2" placeholder="Tên tài khoản">
                    </div>
                    <div class="login_cente_bottom--name">
                        <div class="login_cente_bottom--nameText">Tên</div>
                        <input type="text" text="" class="login_cente_bottom--NameInput login_cente_bottom--NameInputW2" placeholder="Tên tài khoản">
                    </div>
                </div>
                <div class="login_cente_bottomList">
                    <div class="login_cente_bottom--name">
                        <div class="login_cente_bottom--nameText">Số điện thoại</div>
                        <input type="text" text="" class="login_cente_bottom--NameInput login_cente_bottom--NameInputW2" placeholder="Tên tài khoản">
                    </div>
                    <div class="login_cente_bottom--name">
                        <div class="login_cente_bottom--nameText">Email</div>
                        <input type="text" text="" class="login_cente_bottom--NameInput login_cente_bottom--NameInputW2" placeholder="Tên tài khoản">
                    </div>
                </div>
                <a href="index.php?act=doimatkhau"><button class="login_cente_bottom--btn container_pay_conten_bottom--btn" type="submit">Đổi mật khẩu</button></a>
                <button class="login_cente_bottom--btn" type="submit">Lưu thông tin</button>
            </div>
            <div class="login_cente_user container_user_Tab" data-tab="2">
                <div class="container_user_showList--story">
                    <div class="container_user_showList--storyTop">
                        <div class="container_user_showList--storyTopText">Ngày giao dịch</div>
                        <div class="container_user_showList--storyTopText">Tên phim</div>
                        <div class="container_user_showList--storyTopText">Số vé</div>
                        <div class="container_user_showList--storyTopText">Số tiền</div>
                    </div>
                    <div class="container_user_showList--storyTop">
                        <div class="container_user_showList--storyTopText font">03-09-2003</div>
                        <div class="container_user_showList--storyTopText font">Alibaba và 3 con khỉ</div>
                        <div class="container_user_showList--storyTopText font">2</div>
                        <div class="container_user_showList--storyTopText font">160.000</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER -->