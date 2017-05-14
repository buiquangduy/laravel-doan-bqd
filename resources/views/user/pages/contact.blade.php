@extends('user.master')
@section('description','liên hệ')
@section('author','Bùi Quang Duy')
@section('content')
<div id="content">
  <div class="wrap_content">
    <div class="location white"><a href="{{url('/')}}">Trang chủ</a> &gt;&gt; Liên hệ</div>
    <div class="clear"></div>
    <div class="box_common">
    <div class="title_box_1"><h1>Liên hệ</h1></div><!--title_box_1-->
      <div class="clear"></div>
      <div style="width:45%; float:left;">
        <b>GIABAO-SHOP - CƠ SỞ I bán lẻ</b>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2258495064893!2d105.84376294904114!3d20.983581994629677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac4219f006ad%3A0xd0bb6c2c4164af01!2zNTEyIFRyxrDGoW5nIMSQ4buLbmgsIFTDom4gTWFpLCBIb8OgbmcgTWFpLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1494750914956" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br>
        <small>View <a href="https://www.google.com/maps/place/512+Tr%C6%B0%C6%A1ng+%C4%90%E1%BB%8Bnh,+T%C3%A2n+Mai,+Ho%C3%A0ng+Mai,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@20.983582,105.8437629,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac4219f006ad:0xd0bb6c2c4164af01!8m2!3d20.983577!4d105.845957" target="_blank" style="color:#0000FF;text-align:left">GIABAO-SHOP</a> in a larger map</small>
        <div class="clear"></div>
      </div><!--float:left-->
      <div style="width:45%; float:right;">
        <p><strong>Chi nhánh - Hà Nội<br></strong></p>
        <p><strong>Cơ sở bán lẻ :</strong></p>
        <p><strong>CS 1 : 512 Trương Định - Hoàng Mai - Hà Nội &nbsp;</strong><strong>Hotline : 01652400676</strong></p>
        <p><strong>CS2 : 83 Xuân Thủy, Cầu Giấy, Hà Nội Hotline :&nbsp;048 5877804</strong></p>
        <p><strong>CS 3: 106 Tô Hiệu, Hải Phòng Hotline:&nbsp;0941103838</strong></p>
        <p><strong>CS 4: 210 Tống Duy Tân, Thanh Hóa - Điện thoại:&nbsp;0916072258</strong></p>
        <p>&nbsp;</p>
        <p><strong>CS 5:&nbsp;171 Thái Hà, Đống Đa, Hà Nội&nbsp;</strong></p>
        <p><strong>CS 6: &nbsp;30 Nguyễn Văn Cừ , TP Vinh , Nghệ An</strong></p>
        <p><strong>CS 7: 131 Cao Thắng, Hạ Long, Quảng Ninh&nbsp;</strong></p>
        <p><strong>Cơ sở ONLINE:&nbsp;<strong>&nbsp;</strong></strong></p>
        <p><strong><strong><strong>Ngõ 20 Hồ Tùng Mậu - Cầu Giấy - Hà Nội</strong></strong><br>Hotline :&nbsp;01652400676</strong></p>
    <div class="clear"></div>
            <br>
            <style type="text/css">
                .require { font-weight:bold; color:#F00}
            </style>
    <!--p>Mọi thắc mắc hoặc góp ý, quý khách vui lòng liên hệ trực tiếp với bộ phận chăm sóc khách hàng của chúng tôi bằng cách điền đầy đủ thông tin vào form bên dưới</p>
    <p>&nbsp;</p>
          <form method="post" enctype="multipart/form-data" action="/ajax/customer_contact.php">
            <div>
                <table width="100%" style="border:none;">
                    <tr>
                      <td><b>Tên đầy đủ</b> <span class="require">*</span></td>
                        <td><input type="text" size="50" name="contact_name" id="contact_name" /></td>
                    </tr>
                    <tr>
                        <td><b>Email</b> <span class="require">*</span></td>
                        <td><input type="text" size="50" name="contact_email" id="contact_email" /></td>
                    </tr>
                    <tr>
                        <td><b>Điện thoại</b></td>
                        <td><input type="text" size="50" name="contact_tel" id="contact_tel" /></td>
                    </tr>
                    <tr>
                        <td><b>Thông tin liên hệ</b> <span class="require">*</span></td>
                        <td><textarea rows="8" name="contact_message" id="contact_message" style="width:329px;"></textarea></td>
                    </tr>
                     <tr>
                          <td><b>Mã bảo vệ</b> <span class="require">*</span></td>
                          <td><input type="text" size="10" id='captcha' name="captcha" style="float:left; margin-top:20px;"/><img src="/includes/captcha/captcha.php?v=" id='captchar_holder' style="float:left;"/> <a href="javascript:change_captcha('captchar_holder')" style="float:left; margin-top:32px;">[Đổi mã khác]</a></td>
                      </tr>
                    <tr>
                        <td></td>
                        <td>
                            <br />
                            <input type="submit" value="Gửi liên hệ" onclick="return check_form();" />
                        </td>
                    </tr>
                </table>
            </div>
                <input type="hidden" value="send" name="action" />
                <input type="hidden" name="return_url" value="/lien-he" />
            </form>
            

            <script type="text/javascript">
                function check_form(){
                    var error = "";
                    var check_name = document.getElementById('contact_name').value;
                    var check_email = document.getElementById('contact_email').value;
                    var check_message = document.getElementById('contact_message').value;
                    var check_captcha = document.getElementById('captcha').value;
              
                    if(check_name.length < 4) error += "- Bạn chưa nhập tên\n";
                    if(check_email.length < 4) error += "- Bạn chưa nhập email\n";
                    if(check_message.length < 4) error += "- Bạn chưa nhập nội dung\n";
                    if(check_captcha.length < 4) error += "- Bạn chưa nhập Mã bảo vệ\n";

                    if(error == "") return true;
                    else alert(error);
                    return false;
                }
              
               
                function change_captcha(holder){
                  var unixtime_ms = new Date().getTime();
                  $("#"+holder).attr("src","/includes/captcha/captcha.php?v="+unixtime_ms);
                }
  
            </script-->
      </div><!--float:left-->
    </div><!--box_common-->
  </div><!--wrap_content-->
</div>
@endsection