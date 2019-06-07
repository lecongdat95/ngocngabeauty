<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'ngocnga');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9H,W_Tc!|A)=-Do01B2hL-~/x.]wX__9mOBU`WE3OQ};=Fx7}KG!GgSeHop?^ le');
define('SECURE_AUTH_KEY',  '}}U>]]]dFc!(.wX)=R^Fl`$>tg(s%>tl#t.id@3`AV u`!#9EK)#=p8`D+UH3JEo');
define('LOGGED_IN_KEY',    'o^w||NJyvt;lJ5DF1!z`Me|L-oC*[R%n,nN/Y8j14DE{uGLR0oJ37#U#f_lN:FGC');
define('NONCE_KEY',        ']xL0=4]*tu`r+nNCl {^p.l!vz@Xo&}AvMwf%aNyYVxb$s@]g{R-k]CzE{;5z9[U');
define('AUTH_SALT',        'm(md]9q+WD/zCkfONWnGp&2diB(e4T3j4,PxTPp*4},7Kq5B4dXZLzltT0vOTKT]');
define('SECURE_AUTH_SALT', 'P8[=o0;0TQ1v+j]F7^W1{|M3>h5tWgylSwqsDD#|6&VK!O3,l9MnkL[mnq~ki@pZ');
define('LOGGED_IN_SALT',   'b!)T4o0Q~,8Ogk!9Y:i;^NP],O83j+4c)V?sZfX#zlib}|DkQx<;@e({gD.b$W@R');
define('NONCE_SALT',       '}$0G{6v6cA[P9@YtRTK_`=M.5gY;x7cPDF{Ps_ECTZ(ok9pvpnV>u&;&__eXBpts');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
