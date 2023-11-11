
// // Đặt thời gian ban đầu là 10 phút (600 giây)
// let remainingTime = 600;

// // Hàm cập nhật thời gian và hiển thị nó trên trang
// function updateCountdown() {
//   const minutes = Math.floor(remainingTime / 60);
//   const seconds = remainingTime % 60;
//   document.getElementById('countdown').textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

//   // Giảm thời gian còn lại mỗi giây
//   if (remainingTime > 0) {
//     remainingTime--;
//   } else {
//     clearInterval(countdownInterval); // Dừng đếm ngược khi hết thời gian
//     alert("Hết thời gian!"); // Hiển thị thông báo khi hết thời gian
//   }
// }

// // Bắt đầu đếm ngược và cập nhật mỗi giây
// const countdownInterval = setInterval(updateCountdown, 1000);