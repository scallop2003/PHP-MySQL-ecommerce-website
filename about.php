<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
   $about_title = $row['about_title'];
    $about_content = $row['about_content'];
    $about_banner = $row['about_banner'];
}
?>

<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $about_banner; ?>);">
    <div class="inner">
        <h1>Giới thiệu</h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <p>
                    <b>Fashiony.com</b> khiến bạn toả sáng trong những dịp đặc biệt, nhất là đối với phái đẹp. Mục tiêu của chúng tôi luôn luôn là chúc mừng bạn! Chúng tôi mang tới một bộ sưu tập lớn dù bạn tham dự một bữa tiệc, đám cưới hay bất kì sự kiện nào cần tới một bộ váy đẹp.
                </p>
                <p>
                    <b>Về chúng tôi</b>
                </p>
                <p>
                    <b>Fashiony.com</b> là một nơi mua sắm thời trang mới, nơi mà sẽ mang tới những sản phẩm thời trang "trendy" với mức giá hấp dẫn. Chúng tôi cảm thấy rằng thời trang không phải là những gì bạn mặc mà là cách bạn cảm nhận, vì vậy hãy luôn ghi nhớ, chúng tôi mang tới cho bạn những nhà thiết kế quần áo bao gồm nhiều mẫu thiết kế, kiểu dáng để đáp ứng mọi cảm xúc của bạn.
                </p>
                <p>
                    <b>Tầm nhìn của chúng tôi</b>
                </p>
                <p>
                    Tầm nhìn của chúng tôi là mang vẻ đẹp cùng nụ cười của bạn tới thế giới với trải nghiệm mua sắm trực tuyến tốt nhất. Chúng tôi trao tận tay bộ sưu tập quần áo phụ nữ để phù hợp với họ dựa trên loại cơ thể, màu da, tài chính và sở thích. Mục tiêu của chúng tôi là mang lại cho khách hàng những khoảng thời gian trải nghiệm mua hàng một cách 
                </p>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>