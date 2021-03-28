

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            Web Portal SIPADU STIS : Beranda        </title>
        <script src="https://stis.ac.id/sipadu/mahasiswa/js/jquery-1.3.js"></script>
	    <script type="text/javascript" src="https://stis.ac.id/sipadu/mahasiswa/js/jquery144.min.js"></script>
        <script type="text/javascript" src="https://stis.ac.id/sipadu/mahasiswa/js/jquery.autocomplete.js"></script>
        <script type="text/javascript" src="https://stis.ac.id/sipadu/mahasiswa/js/jquery.easing.js"></script>
        
     
        <script>
    jQuery.panel_menu_show = function (ul_area,btn_area) {
        btn_area.addClass("tombol_nav_menu");
        ul_area.show();
        objek = btn_area.parent(".head_nav")
        objek.toggle(function() {
            ul_area.slideUp("fast");
            btn_area.removeClass("tombol_nav_menu");
            btn_area.addClass("tombol_nav_menu_collpased");
        },function() {
            ul_area.slideDown("fast");
            btn_area.removeClass("tombol_nav_menu_collpased");
            btn_area.addClass("tombol_nav_menu");
        });
    }

    jQuery.panel_menu_hide = function (ul_area,btn_area) {
        btn_area.addClass("tombol_nav_menu_collpased");
        ul_area.hide();
        objek = btn_area.parent(".head_nav")
        objek.toggle(function() {
            ul_area.slideDown("fast");
            btn_area.removeClass("tombol_nav_menu_collpased");
            btn_area.addClass("tombol_nav_menu");
        },function() {
            ul_area.slideUp("fast");
            btn_area.removeClass("tombol_nav_menu");
            btn_area.addClass("tombol_nav_menu_collpased");
        });
    }
    // SET KUMPULAN FUNCTION UNTUK MELOAD PANEL-PANEL MENU SESUAI DENGAN PAGE AKTIF
    jQuery.set_default_panel = function() {
        $.panel_menu_show($("#menu_akun_ul"),$("#akun_btn"));
        $.panel_menu_show($("#menu_kuliah_ul"),$("#perkuliahan_btn"));
        
        $.panel_menu_show($("#menu_utility_ul"),$("#utility_btn"));
        $.panel_menu_hide($("#menu_skripsi_ul"),$("#menuSkripsi_btn"));
        $.panel_menu_hide($("#menu_poliklinik_ul"),$("#poliklinik_btn"));
	$.panel_menu_hide($("#menu_uppm_ul"),$("#uppm_btn"));
    }
    // Sistem Informasi Skripsi -> Skripsi Dede Apriyandi
//    jQuery.set_aktif_panelSkripsi = function() {
//        $.panel_menu_hide($("#menu_kuliah_ul"),$("#perkuliahan_btn"));
//        $.panel_menu_hide($("#menu_akun_ul"),$("#akun_btn"));
//        $.panel_menu_hide($("#menu_utility_ul"),$("#utility_btn"));
//	$.panel_menu_hide($("#menu_poliklinik_ul"),$("#poliklinik_btn"));
//        $.panel_menu_show($("#menu_skripsi_ul"),$("#menuSkripsi_btn"));
//	$.panel_menu_hide($("#menu_uppm_ul"),$("#uppm_btn"));
//    }

//      jQuery.set_aktif_panelPoliklinik = function() {
//        $.panel_menu_show($("#menu_kuliah_ul"),$("#perkuliahan_btn"));
//        $.panel_menu_show($("#menu_akun_ul"),$("#akun_btn"));
//        $.panel_menu_show($("#menu_utility_ul"),$("#utility_btn"));
//        $.panel_menu_hide($("#menu_pimpinan_ul"), $("#pimpinan_btn"))
//        $.panel_menu_hide($("#menu_skripsi_ul"),$("#menuSkripsi_btn"));
//        $.panel_menu_show($("#menu_poliklinik_ul"),$("#poliklinik_btn"));
//        $.panel_menu_hide($("#menu_uppm_ul"),$("#uppm_btn"));
//    }
//     jQuery.set_aktif_panelUPPM = function() {
//        $.panel_menu_show($("#menu_kuliah_ul"),$("#perkuliahan_btn"));
//        $.panel_menu_show($("#menu_akun_ul"),$("#akun_btn"));
//        $.panel_menu_show($("#menu_utility_ul"),$("#utility_btn"));
//        $.panel_menu_hide($("#menu_skripsi_ul"),$("#menuSkripsi_btn"));
//        $.panel_menu_hide($("#menu_poliklinik_ul"),$("#poliklinik_btn"));
//        $.panel_menu_show($("#menu_uppm_ul"),$("#uppm_btn"));
//    }
	
    
    $(document).ready(function(){
        // untuk animasi penghias kecil-kecilan
//        $('.share_ul_bg li a').mouseover(function () {
//            $(this).animate({width:"170px"},150);
//            $(this).animate({paddingLeft:"20px"},150);
//        });
//        $('.share_ul_bg li a').mouseout(function () {
//            $(this).animate({paddingLeft:"10px"},150);
//            $(this).animate({width:"180px"},150);
//        });



    })
</script>	

<script>
    jQuery.panel_menu_show = function (ul_area,btn_area) {
        btn_area.addClass("tombol_nav_menu_home");
        ul_area.show();
        objek = btn_area.parent(".borderHomeDashboard")
        objek.toggle(function() {
            ul_area.slideUp("fast");
            btn_area.removeClass("tombol_nav_menu_home");
            btn_area.addClass("tombol_nav_menu_home_collpased");
        },function() {
            ul_area.slideDown("fast");
            btn_area.removeClass("tombol_nav_menu_home_collpased");
            btn_area.addClass("tombol_nav_menu_home");
        });
    }

    jQuery.panel_menu_hide = function (ul_area,btn_area) {
        btn_area.addClass("tombol_nav_menu_home_collpased");
        ul_area.hide();
        objek = btn_area.parent(".borderHomeDashboard")
        objek.toggle(function() {
            ul_area.slideDown("fast");
            btn_area.removeClass("tombol_nav_menu_home_collpased");
            btn_area.addClass("tombol_nav_menu_home");
            
        },function() {
            ul_area.slideUp("fast");
            btn_area.removeClass("tombol_nav_menu_home");
            btn_area.addClass("tombol_nav_menu_home_collpased");
        });
    }
    // SET KUMPULAN FUNCTION UNTUK MELOAD PANEL-PANEL MENU SESUAI DENGAN PAGE AKTIF
    jQuery.set_default_panel = function() {
        $.panel_menu_show($("#jadwal"),$("#jadwal_btn"));
    }

    $(document).ready(function(){
        // untuk animasi penghias kecil-kecilan
//        $('.share_ul_bg li a').mouseover(function () {
//            $(this).animate({width:"170px"},150);
//            $(this).animate({paddingLeft:"20px"},150);
//        });
//        $('.share_ul_bg li a').mouseout(function () {
//            $(this).animate({paddingLeft:"10px"},150);
//            $(this).animate({width:"180px"},150);
//        });


    })
</script>
        <link href="https://stis.ac.id/sipadu/mahasiswa/css/style_master.css" rel="stylesheet" type="text/css" />
        <link href="https://stis.ac.id/sipadu/mahasiswa/css/post_login.css" rel="stylesheet" type="text/css" />
	    <link href="https://stis.ac.id/sipadu/mahasiswa/css/dashboard.css" rel="stylesheet" type="text/css" />
                <link rel="icon" href="https://stis.ac.id/sipadu/mahasiswa/images/icon_logo.ico" />


    </head>


    <body>

        <div id="headerbg">
            <div id="headerblank">
                <div id="header">
                    <div id="tahun_berjalan">
	Tahun Akademik 2020/2021 Semester Genap</div> <!-- akhir div menu-->                 </div>
            </div>
        </div>

        <div id="contentbg">
            <div id="contentblank">
                <div id="content">

                    <div id="contentleft">
                        <div id="identity">
    Selamat Datang, <br/>
    SETYO DWI SAPUTRA, 4SI1</div>
<div class="head_nav">
    <div class="head_txt">
            User Online :
    17    </div>
</div>
<div style="width:209px; height:10px; float:left"> </div>
<div class="head_nav">
    <div class="head_txt">
        Menu Utama
    </div>
</div>

<div class="share_ul_bg">
    <ul>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/index">Beranda</a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/listPost/berita" id="menu_profile">Berita <b>(503)</b></a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/daftarDosen" id="menu_profile">Daftar Dosen</a></li>
	<li></li>
    </ul>
</div>
<div style="width:209px; height:10px; float:left"> </div>
                        <script language="JavaScript">
    function popup(){
        window.open('https://stis.ac.id/sipadu/mahasiswa/index.php/angket_eval/popup','popup','width=900,height=500,left=200,top=200,scrollbars=yes');}
</script>


<div id="perkuliahan" class="head_nav">
    <div class="head_txt">
        Perkuliahan
    </div>
    <div id="perkuliahan_btn" class = "">
    </div>
</div>
<div class="share_ul_bg" id="menu_kuliah_ul">
    <ul>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/jadwal" id="menu_setting">Jadwal Kuliah</a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/sap/index" id="menu_setting">SAP dan Bahan Kuliah</a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/nilai/index_baru" id="menu_availibility">Nilai</a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/peminatan" id="menu_sema">Peminatan</a></li>
	<li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/angket_eval/angket_dosen" id="menu_sema">Angket Evaluasi Dosen</a></li>
        <li></li>
        
    </ul>
</div>
<div style="width:209px; height:10px; float:left"> </div>                        <div id="akun" class="head_nav">
     <div class="head_txt">
        Data Diri
    </div>
    <div id="akun_btn" class = "">
    </div>
</div>
<div class="share_ul_bg" id="menu_akun_ul">
    <ul>
	 <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/user/setting" id="menu_setting">Edit Akun</a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/profile" id="menu_profile">Profil</a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/bimbingan_akademik/grafikAbsensi" id="menu_daftar_mhsw">Absensi</a></li>
<!--        <li></li>-->
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/bimbingan_akademik/grafikPelanggaran" id="menu_daftar_mhsw">Pelanggaran dan Prestasi</a></li>
	        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/kesanPesan">Form Kesan Pesan</a></li>
            </ul>
</div>
<div style="width:209px; height:10px; float:left"> </div>			                        <div id="menuSkripsi" class="head_nav">
    <div class="head_txt">
        Penyusunan Skripsi
    </div>
    <div id="menuSkripsi_btn" class="">
    </div>
</div>
<div class="share_ul_bg" id="menu_skripsi_ul">
    <ul>
        <!-- 2019-06-19 Isfan: -->
        <li></li>
        <!-- end isfan -->
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/skripsi/pencarian_judul">Pencarian</a></li>
        <!-- 2019-05-23 Tingkat 4 Statistik -->
                <!-- 2019-05-23 Tingkat 4 Komputasi Statistik -->
                    <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/skripsi/upload_proposal">Upload</a></li>
                <!-- 2019-05-23 Tingkat 3 D3 -->
        
                <!-- <li></li> -->
                <!-- <li></li> -->
                    <!--<li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/skripsi/laporan_skripsi">Laporan</a></li> -->
                    <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/skripsi/absensi_bimbingan">Absensi Bimbingan</a></li>
                    <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/skripsi/jadwal_seminar_k">Seminar</a></li>

        
            <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/skripsi/jadwal_sidang">Sidang</a></li>
            <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/skripsi/finalisasi">Finalisasi</a></li>
            <!-- <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/skripsi/jadwal_sidang_last">Sidang T.A. 2017-2018</a></li> -->
        
        
    </ul>
</div>
<div style="width:209px; height:10px; float:left"> </div>									 <div id="uppm" class="head_nav">
    <div class="head_txt">
        PPPM
    </div>
    <div id="uppm_btn" class = "">
    </div>
</div>
<div class="share_ul_bg" id="menu_uppm_ul">
    <ul>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/jurnal_online/komputasi" id="menu_profile">Jurnal Online</a></li>
       	<li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/uppm/jurnal" id="menu_setting">Jurnal STIS</a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/uppm/PengMas" id="menu_availibility">Pengabdian Masyarakat</a></li>
	<li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/uppm/artikel" id="menu_setting">Download Artikel</a></li>
    </ul>
</div>
<div style="width:209px; height:10px; float:left"> </div>                        <div id="func_lain" class="head_nav">
    <div class="head_txt">
        Lain-lain
    </div>
    <div id="utility_btn" class = "">
    </div>
</div>
<div class="share_ul_bg" id="menu_utility_ul">
    <ul>
	<li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/dn/angket" id="menu_setting">Angket DN</a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/download/skripsi" id="menu_setting">Download</a></li>
        <li><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/download/linkweb" id="menu_setting">Data Penelitian</a></li>
	<li><span class="disabled_btn">E-Learning</span></li>
    </ul>
</div>
<div style="width:209px; height:10px; float:left"> </div>                    </div>              

                    <div id="runningteks">
                        <marquee  direction="left" behavior="scroll" scrollamount="4" > 
                            <font color="red"> PC Kelas hanya diperuntukkan untuk perkuliahan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </font>
                            <font color="green">  Segera lapor kerusakan yang Anda temukan ke BAU &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </font>
                            <font color="blue">  Hematlah air (matikan keran setelah digunakan)  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </font>
                            Hematlah listrik (matikan lampu, AC, viewer setelah selesai digunakan)
                        </marquee>
                    </div>
                    
                   <!-- <div id="runningteks">
                        <marquee  direction="left" behavior="scroll" scrollamount="4" > 
                            Masa Pengenalan dan Pembentukan Karakter (MP2K) Mahasiswa Baru STIS T.A. 2016/2017 diselenggarakan tanggal 5 - 9 September 2016, dengan tema "Membentuk Mahasiswa yang Berbudi Pekerti, Berintelektual, dan Berjiwa Nasionalisme."
                        </marquee>
                        		<marquee  direction="left" behavior="scroll" scrollamount="4" > 
                            Selamat Melaksanakan UTS gasal 2017/2018 pada 27 Nov - 8 Des 2017
                        </marquee>
                    </div>-->
                    
                    <div class="Headline" >
                        <div class ='judulHeadline'> Beranda </div>
			<div style="float:right; font-size:11px; text-transform: capitalize; margin-left : 10px;"> <a href="https://stis.ac.id/sipadu/mahasiswa/login/logout">Logout</a> </div>
			<div style="float:right; font-size:11px; text-transform: capitalize; margin-left : 10px;"> <a href="https://stis.ac.id/sipadu/mahasiswa/main/help">Help</a> </div>
                        <div id='tgl_sekarang'>
Minggu, 28 Maret 2021  
</div>


  
                    </div>
                    
                        <div id="contentmid">
                            <div id="ajaxLoading" style="display:none;"> Sedang Dimuat</div>
                            <div id="ajaxError"   style="display:none;"> Ada Masalah Dengan Koneksi Internet Anda... </div>
                                                <!--<div style="text-align: center; float:left;display: block; width: 630px; background: #1b68a9; color: #fff;"><marquee onmouseover="this.stop()" onmouseout="this.start()"><b>Gerakan Hemat Energi BPS: <font color="#acf8fd"># </font> Matikan lampu dan peralatan saat tidak digunakan <font color="#acf8fd"># </font> Gunakan air seperlunya</b></marquee></div>-->
<div class="borderHomeDashboard">
<div class="judulKategoriDashboard">D A S H B O A R D </div><div id="jadwal_btn" class = "tombol_nav_menu_home">
    </div>
<div id="jadwal">

<!--    <div class="judulKategori">J A D W A L&nbsp;&nbsp;K U L I A H&nbsp;&nbsp;H A R I&nbsp;&nbsp;I N I </div>-->
<!--<div id="menu_akademik_btn" class = "tombol_nav_menu">
    </div>-->

<div id="jadwal" class="borderJudulJadwal">
    
    <img src="https://stis.ac.id/sipadu/mahasiswa/css/default_image/kuliahhariini.png" />            
    </div>
<div class="borderJadwal">


            <table cellpadding="1px" border="1px" cellspacing="0px" class="tabel_home" >
                                <tr height="15px">
                    
                    <td class="tabel_home" width="50px" align="center" height="15px">Sesi 1</td>
                    <td class="tabel_home" align="center" width="200px" height="15px"></td>
                   
                </tr>
                                 <tr height="15px">
                    
                    <td class="tabel_home" width="50px" align="center" height="15px">Sesi 2</td>
                    <td class="tabel_home" align="center" width="200px" height="15px"></td>
                   
                </tr>
                                 <tr height="15px">
                    
                    <td class="tabel_home" width="50px" align="center" height="15px">Sesi 3</td>
                    <td class="tabel_home" align="center" width="200px" height="15px"></td>
                   
                </tr>
                                 
            </table>
        
    

</div>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<div class="borderDashboard">
<table>
    <tr>
        <td class="grafik3">
            <span id="myChart1" align="center" title="Skor Kehadiran">
    <!-- START Script Block for Chart absensi -->
    <style>
    svg > g[class^="raphael-group-"] > text{
        display: none;
    }
    </style>
	<div id="absensiDiv" align="center">
		Chart.
	</div>
	<script type="text/javascript">	
		//Instantiate the Chart	
		var chart_absensi = new FusionCharts("angulargauge", "absensi", "200", "140", "0", "0");
      chart_absensi.setTransparent("false");
    
		//Provide entire XML data using dataXML method
		chart_absensi.setXMLData("<chart lowerLimit='0' showBorder='0' bgColor='eef5ff' upperLimit='100' lowerLimitDisplay='Malas' upperLimitDisplay='Rajin' gaugeStartAngle='240' gaugeEndAngle='-60' palette='1' numberSuffix='%' tickValueDistance='20' showValue='1'><colorRange><color minValue='0' maxValue='80' code='FF654F'/><color minValue='80' maxValue='90' code='F6BD0F'/><color minValue='90' maxValue='100' code='8BBA00'/></colorRange><dials><dial value='100' rearExtension='10'/></dials></chart>")
		//Finally, render the chart.
		chart_absensi.render("absensiDiv");
	</script>	
	<!-- END Script Block for Chart absensi --> </span>  
            <div class="jdlGrafik"></div>
        </td>
        <!--<td class="grafik3">
            <div class="jdlGrafik">Skor Pelanggaran</div>
            <br/>
            <span id="myChart2" align="center"> </span>
            <br/>
        </td>-->
    </tr>
</table>
</div>
<div class="borderJudulJadwalKanan">
<img src="https://stis.ac.id/sipadu/mahasiswa/css/default_image/ketidakhadiran.png" /></div><div class="borderHomeAtas">
</div>
</div>
</div>
<!--<div style="float: left; display: block; width: 310px; margin-top: 10px; border: 1px; border-color: white ; border-radius: 5px; border-style: solid; background-color: #e0f5fb; padding: 5px">-->

<div class="borderKategori">
<img src="https://stis.ac.id/sipadu/mahasiswa/css/default_image/pengumuman.png" /><div class="judulKategori">P E N G U M U M A N </div>
<div class="borderBerita">
    <div class="borderBerita1">
        
    <div class="judulBerita"><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/post/QVRKVk1nVXpCVHM9" class="jdl_berita_link">PERATURAN DIREKTUR POLITEKNIK STATISTIKA STIS NOMOR 002 TAHUN 2020</a></div>
    
   
    
        <span class='rowTglBerita'>BAAK | Jumat, 29 Januari 2021 | Dibaca : 677</span>
   
  
    Kepada seluruh civitas akademika Politeknik Statistika STIS, Berikut 
    disampaikan Peraturan 
    Direktur Politeknik Statistika STIS Nomor 002 Tahun 2020.Terima 
    kasih.
  

        
    </div>
    <div class="borderBerita2">
                
    <div class="judulBeritaMore"><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/post/VjJRQ1pWVmpWV1E9" class="jdl_berita_link_more">K-Nisaa' Istimewa 2020</a> <img src="https://stis.ac.id/sipadu/mahasiswa/css/imagesBlue/new.gif" /></div>


    
        <span class='rowTglBerita2'>BAAK | Kamis, 05 November 2020 | Dibaca : 210</span>    <hr />
            
    <div class="judulBeritaMore"><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/post/QmpWVk1nUXlWV2M9" class="jdl_berita_link_more">Buku Pedoman BAAK</a></div>


    
        <span class='rowTglBerita2'>BAAK | Selasa, 18 Agustus 2020 | Dibaca : 968</span>    <hr />
        <a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/listPost/berita" class="linkAllPengumumanMore">Lihat semua Pengumuman</a>                
    </div>
    
    
    
</div>
</div>

<div class="borderKategori">
<img src="https://stis.ac.id/sipadu/mahasiswa/css/default_image/artikel.png" /><div class="judulKategori">A R T I K E L </div>
<div class="borderBerita">
    <div class="borderBerita1">
        
    <div class="judulBerita"><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/post/QXpBQ1pGSnRDVGM9" class="jdl_berita_link">Kecanduan Game vs eSport, Bedanya Apa?</a> <img src="https://stis.ac.id/sipadu/mahasiswa/css/imagesBlue/new.gif" /></div>



        <span class='rowTglBerita'>Jurusan | Selasa, 19 November 2019 | Dibaca : 700</span>
   
  
    

    
    

    

      Jakarta - Isu soal kecanduan game sedang marak-maraknya, akan 
      tetapi di satu sisi game hal ini bagaikan pisau bermata dua yang bisa 
      memberikan manfaat serta menyumbang prestasi untuk negara. Tapi ada 
      bedanyakah kecanduan game sama ...        </div>
    <div class="borderBerita2">
            
    <div class="judulBeritaMore"><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/post/VldZQ1pBVTZCelk9" class="jdl_berita_link_more">Cara Gunakan Google Find My Device untuk Lacak Ponsel yang Hilang</a> <img src="https://stis.ac.id/sipadu/mahasiswa/css/imagesBlue/new.gif" /></div>



        <span class='rowTglBerita2'>BAAK | Selasa, 19 November 2019 | Dibaca : 451</span>    <hr />
        
    <div class="judulBeritaMore"><a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/post/QkQxWlBsSmk=" class="jdl_berita_link_more">Canggih! Petani Jepang Sudah Pakai Cloud Computing</a></div>



        <span class='rowTglBerita2'>Jurusan | Kamis, 16 Mei 2013 | Dibaca : 2473</span>    <hr />
        <a href="https://stis.ac.id/sipadu/mahasiswa/index.php/main/listPost/berita" class="linkAllPengumumanMore">Lihat semua Artikel</a>                
    </div>
    

    
</div>
</div>

<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;hl=in&amp;bgcolor=%23999999&amp;src=221710008@stis.ac.id&amp;color=%232952A3&amp;ctz=Asia%2FJakarta" style=" border:solid 1px #777 " width="600" height="400" frameborder="0" scrolling="no"></iframe>                    </div>

                </div>
            </div> 
        </div> 

        
        <div id="footerbg">
            <div id="footerblank">
                <div id="footer">
                    <span class="footerTeks"> Copyright &copy; 2010-2021 Politeknik Statistika STIS </span><br />
                    <span class="footerTeks"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; contact us: sipadu@stis.ac.id</span>
                </div>
            </div>
        </div>

        
    </body>
</html>
