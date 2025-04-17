# Hướng Dẫn Cài Đặt Hệ Thống Auto/Taxi Stand Management System (Auto/Taxi Stand Management System)
## 📥 Cài Đặt

1. Tải file zip hệ thống về máy.
2. Giải nén và copy thư mục `atsms`.
3. Dán thư mục `atsms` vào thư mục gốc của máy chủ web:
   - XAMPP: `xampp/htdocs`
   - WAMP: `wamp/www`
   - LAMP: `var/www/html`
4. Mở trình duyệt và truy cập (http://localhost/phpmyadmin)
5. Tạo database với tên **atsmsdb**
7. Import file `atsmsdb.sql` (nằm trong thư mục SQL file của gói zip).
![image](https://github.com/user-attachments/assets/85408012-a813-484c-8bd1-e9568e7c55ba)


9. Chạy hệ thống qua đường dẫn: [http://localhost/atsms](http://localhost/atsms)
   
![image](https://github.com/user-attachments/assets/851865bd-d28f-4c34-ad11-b4080ef89057)
10. Thông tin đăng nhập vào hệ thống quản lý stand: http://localhost.atsms/admin/index.php
![image](https://github.com/user-attachments/assets/3a8005f2-29d8-43b3-8064-95179cdda3e9)

### 🔐 Thông Tin Đăng Nhập Quản Trị
- Username: `admin`
- Password: `Test@123`
![image](https://github.com/user-attachments/assets/75cc5026-034b-4173-9b53-388fddcdce41)

---

## 🧠 CTF Challenge – XanhTaxi: Cuốc xe của bóng tối.

### 🕵️ Cốt Truyện:
- Nền tảng gọi xe công nghệ XanhTaxi vừa mới ra mắt với sứ mệnh “**vận chuyển xanh, vì tương lai sạch**”. Với giao diện bắt mắt và cam kết bảo mật cao, XanhTaxi nhanh chóng thu hút hàng nghìn người dùng mỗi ngày. Tuy nhiên, dưới lớp vỏ thân thiện đó là những dòng code nguy hiểm chưa từng được audit kỹ càng.
- Gần đây, một nhóm researcher phát hiện website của XanhTaxi có nhiều hành vi bất thường. Một số yêu cầu tìm kiếm lạ khiến trình duyệt phản hồi bất thường. Các chuyên gia nghi ngờ hệ thống đang bị cấy những lỗ hổng nghiêm trọng, và có thể – dữ liệu người dùng đang bị đánh cắp hoặc bị theo dõi.
- Bạn – một pentester ẩn danh với mật danh "**Xe Ôm 1337**" – được một người trong nội bộ thuê để điều tra. Nhiệm vụ của bạn là truy vết hệ thống, tìm ra các điểm yếu, và vén màn sự thật đằng sau cuốc xe tử thần.
> 💬 **Tin Đồn Lan Truyền Từ Giới Ngầm An Ninh Mạng:**  
> Một số hacker mũ trắng sau khi kiểm tra hệ thống **XanhTaxi** đã phát hiện những hành vi kỳ lạ trong quá trình truy vấn và hiển thị dữ liệu.  
> Cụ thể, có bằng chứng cho thấy một `flag` đang được **ẩn giấu rất tinh vi**, nằm ở **giao điểm giữa hai kỹ thuật khai thác phổ biến nhưng nguy hiểm**:
> 
> - 🐍 Một đoạn **truy vấn SQL độc hại** – có thể bị khai thác qua các input form hoặc endpoint API chưa được kiểm soát chặt chẽ.
> - 💥 Một đoạn **JavaScript được render động** – xuất hiện khi người dùng thực hiện thao tác tìm kiếm, cho thấy khả năng cao tồn tại lỗ hổng **Reflected XSS**.
> 
> Người chơi cần sử dụng kỹ năng phân tích và khai thác các lỗ hổng để lần theo dấu vết và truy ra vị trí chính xác của flag trong hệ thống.  
> Không có gì là ngẫu nhiên – mọi thứ đều có lý do để tồn tại.

---

### ✍️ Tác Giả

> **👤 Xe Ôm 1337**  
> Một pentester tự do, hành tung bí ẩn, thường chỉ xuất hiện khi các hệ thống tưởng chừng như an toàn bắt đầu... rò rỉ dữ liệu.  
> Với kinh nghiệm dày dạn trong việc khai thác lỗ hổng bảo mật web, Xe Ôm 1337 là người đứng sau hàng loạt CTF thử thách vừa "mặn mà", vừa "hóc búa".  
>  
> 📫 GitHub: [github.com/bananoname](https://github.com/bananoname)  
> ☕ "Khi mọi người đi ngủ, tôi bắt đầu debug..."
---

### 🧩 Nhiệm Vụ:
Tìm và giải mã flag ẩn trong hệ thống XanhTaxi. Manh mối có thể nằm rải rác tại:
- Ô tìm kiếm: Hiển thị kết quả mà không lọc kỹ đầu vào người dùng → có thể thử nghiệm Reflected XSS.
- Trang đăng nhập hoặc các form ẩn: Dễ bị SQL Injection – có thể bypass auth hoặc đọc dữ liệu nhạy cảm.
> 🔖 Flag có dạng chuẩn: `CTF{...}`

### ⚠️ Manh Mối (Gợi ý):
- Trong ô tìm kiếm, thử nhập ```<script>alert(1)</script>``` – nếu thấy cửa sổ bật lên, bạn biết mình đi đúng hướng.
- Dữ liệu tài xế lưu trong bảng drivers? Hãy thử  ```' OR 1=1-- ``` để khám phá thêm.


