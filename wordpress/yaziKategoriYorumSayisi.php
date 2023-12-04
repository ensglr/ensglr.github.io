<?php $toplam_yazi = wp_count_posts( 'post' );
$toplam_yazi = $toplam_yazi->publish;
$toplam_kategori = wp_count_terms('category');
$toplam_yorum = get_comment_count();
$toplam_yorum = $toplam_yorum['approved'];
echo 'Sitemizde Toplam '; echo $toplam_kategori; echo ' Kategoride; '; echo $toplam_yazi; echo ' Makale ve '; echo $toplam_yorum; echo' Yorum Bulunmaktadır.';
 ?>
