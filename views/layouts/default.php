<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$this->e($title)?></title>

    <!-- Styles -->
    <link href="library/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css?v=1.8">
    <link rel="stylesheet" href="/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="library/bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="js/jQuery.js"></script>
    <script src="js/jquery.validater.js"></script>
    

    <?=$this->section("page_specific_css")?>
    <?php 
    if(isset($_SESSION['errors'])){
        $errs = $_SESSION['errors'];
        foreach($errs as $err){
            echo "<script>alert('$err')</script>";
        }
        unset($_SESSION['errors']);
    }
    if(isset($_SESSION['messages'])){
        $messages = $_SESSION['messages'];
        $mess = $messages['success'];
        echo "<script>alert('$mess')</script>";
        unset($_SESSION['messages']);
    }
    ?>
    
</head>
<body>
    <div class="qu-header">
        <div class="qu-main-header">
            <div class="container">
                <div class="row nav-bar"> 
                    <div class="col-4 nav-item">
                        <a href="/home" class="qu-logo text-white text-decoration-none fs-5">
                            <img src="/img/logo_meomeo.png" alt="" height="40px" >
                            MEOMEO
                        </a>
                    </div>
                    <div class="col-4 nav-item">
                        <div class="search">
                            <form action="search" method="post" class="form form-search"> 
                                <input type="text" name="search" class="px-3" required placeholder="Search anything...">
                                <button type="submit" class="btn-search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-4 nav-item ">
                        <nav class="nav justify-content-end">
                            <a class="qu-nav text-white nav-link nav-notify" href="#">
                                <i class="fa-solid fa-bell"></i> 
                                Notify
                                
                            </a>
                            <?php if (! \App\SessionGuard::isUserLoggedIn()): ?>
                            <div class="qu-nav text-white nav-link nav-user">
                                <i class="fa-solid fa-user"></i> 
                                User
                                <div class="box-user">
                                    <a href="/register" class='user-box__content-item mb-2'>
                                        <span class="mx-2">Đăng ký</span>
                                    </a>
                                    <a href="/login" class='user-box__content-item'>
                                        <span class="mx-2">Đăng nhập </span>
                                    </a>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="qu-nav text-white nav-link nav-user">
                                <i class="fa-solid fa-user"></i> 
                                <?=$this->e(\App\SessionGuard::user()->name)?>
                                <div class="box-user">
                                    <a href="/profile" class='user-box__content-item text-decoration-none mb-2'>
                                        <i class='fas fa-user-circle'></i>
                                        <span class="mx-2">Tài khoản của tôi</span>
                                    </a>
                                    <a href="/logout" class='user-box__content-item text-decoration-none'>
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <span class="mx-2">Đăng xuất </span>
                                    </a>
                                </div>
                            </div>
                            <?php endif ?>

                        </nav>
                    
                    </div>
                   
                </div>
            </div>
        </div>
    </div>    
    

    <div id="container" >
        <?=$this->section("page")?>

    </div>

    <div class="qu-footer bg-info p-4">
        <div class="container-xl">
            <h2 class="qu-footer__head text-center text-white">MEOMEO <hr class="qu-footer__hr"></h2>
            <div class="qu-footer__content">
                <div class="row p-2">
                    <div class="col-sm-3">
                        <h5 class="text-white ">Giới thiệu</h5>
                        
                        <div class="p-1">
                            <span class="text-white ">Question web là cộng đồng hỏi đáp và truyền thông về điều tốt đẹp. Không chỉ là giải đáp các câu hỏi thắc mắc trực truyến mà chúng tôi còn hướng đến giúp đỡ nhau giữa đời thường.</span>
                            
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h5 class="text-white ">Hỗ trợ</h5>
                        <div class="p-1">
                            
                            <span class="text-white ">Trang chủ</span><br>
                            <span class="text-white ">Chủ đề</span><br>
                            <span class="text-white ">Hỏi và đáp</span><br>
                            <span class="text-white ">Blog</span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h5 class="text-white ">Bài viết mới nhất</h5>
                    </div>
                    <div class="col-sm-3">
                        <h5 class="text-white ">Liên hệ</h5>
                        <div class="p-1">
                            <span class="text-white ">Địa chỉ: Việt Nam</span><br>
                            <span class="text-white ">SĐT: 0123456789</span>
                            <span class="text-white ">Email:questionweb@gmail.com</span>
                            <span class="text-white ">&copy; QUESTION WEB</span>
                        </div>
                    </div>
                </div>
                
                <hr class="qu-footer__hr">

            </div>
            <div class="qu-footer__footer">
                <span class="text-white ">Bản quyền &copy; QUESTION WEB</span>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>

    <?=$this->section("page_specific_js")?>
</body>
</html>
