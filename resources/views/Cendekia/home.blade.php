<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class="font-[Poppins] bg-[#0136BF] h-screen">
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[70%]  mx-auto">
            <div class='mantap'>
                <img class="logo" src="/Cendekia-Assets/cendikia.png" alt="...">
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-500" href="#">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#program">Program</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#persyaratan">Persyaratan</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#pendaftaran">Biaya</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#agenda">Agenda PPDB</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
    </header>

<div class="home">
    <section>
        <h6>Cendekia Darussalam junior High School</h6>
        <br>
        <h1>CerdasIT Pandai Ngaji</h1>
        <br>
        <h5>penerimaan murid baru tahun ajaran 2024 - 2025 telah dibuka.</h5>
        <!--<button>daftar sekarang</button>-->
        <a href="{{ route('students.create') }}" class="pp">Daftar Sekarang</a>
    </section>
    <div class="img">
        <img src="/Cendekia-Assets/image1.png" alt="ppp"> 
    </div>
</div>

<div class="container">
    <div class="kotak11">
        <section>
            <h1>Video Profil Sekolah</h1>
            <br>
            <h6>Udah pernah denger tentang sekolah cendekia belum ??,
                kalau belum yuk kenanlan dulu,klik video profil disebelah yaa ....</h6>
        </section>
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/watch?v=LpJqxx5pNUk&ab_channel=NetNinja"></iframe>
        </div>
    </div>
</div>

<div id="program" class="judul">
    <h2>Program Unggulan</h2>
    <br>
    <p>Terdapat beberapa program unggulan yang akan kami lebih fokuskan kepada siswa siswi kami</p>
</div>

<article>
    
    <div class="g1">
        <img src="/Cendekia-Assets/image8.png" alt="">
        <div class="konten">
            <h3>Tahfidz Al - Quran</h3>
            <p>Terdapat beberapa program unggulan yang akan kami lebih fokuskan kepada siswa siswi kami</p>
        </div>
    </div>
    
    <div class="g1">
        <img src="/Cendekia-Assets/image5.png" alt="">
        <div class="konten">
            <h3>Bahasa arab</h3>
            <p>Terdapat beberapa program unggulan yang akan kami lebih fokuskan kepada siswa siswi kami</p>
        </div>
    </div>
    
</article>

<article>
    <div class="g1">
        <img src="/Cendekia-Assets/image9.png" alt="">
        <div class="konten">
            <h3>IT</h3>
            <p>Terdapat beberapa program unggulan yang akan kami lebih fokuskan kepada siswa siswi kami</p>
        </div>
    </div>

    <div class="g1">
        <img src="/Cendekia-Assets/image4.png" alt="">
        <div class="konten">
            <h3>Bahasa Inggris</h3>
            <p>Terdapat beberapa program unggulan yang akan kami lebih fokuskan kepada siswa siswi kami</p>
        </div>
    </div>
</article>

<article>
    
    <div class="g1">
        <img src="/Cendekia-Assets/image6.png" alt="">
        <div class="konten">
            <h3>Ekstrakulikuler</h3>
            <p>Terdapat beberapa program unggulan yang akan kami lebih fokuskan kepada siswa siswi kami</p>
        </div>
    </div>
    
</article>

<div class="container1">
    <div class="kotak1">
            <p>Lorem ipsum dolor sit amet consectetur. Quam eget morbi convallis sagittis. Q</p>
    </div>
</div>

<div id="persyaratan" class="judul">
    <h2>Persyaratan Pendaftaran</h2>
    <br>
    <p>adapun syarat pendaftaran yang perlu dilengkapi</p>
</div>

<div class="home1">
    <section>
        <h3>syarat pendaftaran SMP</h3>
        <p>Mengisis formulir pendaftaran</p>
        <p>fotocopy NISN</p>
        <p>fotocopy kartu keluarga satu lembar</p>
        <p>fotocopy akte kelahiran 1 lembar</p>
        <p>fotocopy ktp kedua orangtua 1 lembar</p>
        <p>pas foto 3x4 4 lembar (baju putih background merah)</p>
        <p>fotocopy ijazah sd 1 lembar (boleh menyusul)</p>
    </section>
    <div class="check">
        <div class="a">
            <img src="/Cendekia-Assets/Group24.png" alt="">
        </div>
        <div class="b">
            <img src="/Cendekia-Assets/Group24.png" alt="">
        </div>
        <div class="c">
            <img src="/Cendekia-Assets/Group24.png" alt="">
        </div>
        <div class="d">
            <img src="/Cendekia-Assets/Group24.png" alt="">
        </div>
        <div class="e">
            <img src="/Cendekia-Assets/Group24.png" alt="">
        </div>
        <div class="f">
            <img src="/Cendekia-Assets/Group24.png" alt="">
        </div>
        <div class="g">
            <img src="/Cendekia-Assets/Group24.png" alt="">
        </div>
    </div>
    <div class="img">
        <img src="/Cendekia-Assets/image11.png" alt="ppp"> 
    </div>
</div>

<div id="pendaftaran" class="judul">
    <h2>Biaya Pendaftaran</h2>
    <br>
    <p>adapun syarat pendaftaran yang perlu dilengkapi</p>
</div>

<div class="outlayer">
    <div class="desc">
        <div class="star">
            <img src="/Cendekia-Assets/star.png" alt="">
            <h1>Biaya pendaftaran</h1>
        </div>
        <h3>SD Full Day : Rp.600.000</h3>
        <h3>SD Half Day : Rp.500.000</h3>
        <h3>SMP : Rp.400.000</h3>
    </div>

    <div class="spp">
        <div class="star">
            <img src="/Cendekia-Assets/star.png" alt="">
            <h1>Biaya Sekolah</h1>
        </div>
        <h3>Rp. 200.000</h3>
        <div class="spc">
            <p>Note : </p>
            <p>Biaya pendaftaran tidak dapat dikembalikan bila calon mengundurkan diri.</p>
        </div>
    </div>
</div>


<div class="star1">
    <img src="/Cendekia-Assets/star.png" alt="">
    <h1>Biaya Pendaftaran Ulang</h1>
</div>
<div class="daftar">
    <img src="/Cendekia-Assets/image12.png" alt="">
</div>

<div id="agenda" class="judul">
    <h2>Agenda Pendaftaran Murid Baru</h2>
    <br>
    <p>adapun syarat pendaftaran yang perlu dilengkapi</p>
</div>

<div class="time">
    <img src="/Cendekia-Assets/Group42.png" alt="">
</div>

<div id="kontak" class="outlayer2">
    <div class="kotak">
        <h1>Whatsapp</h1>
        <img src="/Cendekia-Assets/wa.png" alt="">
        <p>+62 899 878 098</p>
    </div>
    <div class="kotak">
        <h1>Instagram</h1>
        <img src="/Cendekia-Assets/ig.png" alt="">
        <p>@cendekiadarussalam</p>
    </div>
    <div class="kotak">
        <h1>Tiktok</h1>
        <img src="/Cendekia-Assets/tiktok.png" alt="">
        <p>@cendekiadrs_</p>
    </div>
</div>

<footer>
    <div class="footer-container">
        <div class="footer-section contact-us">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Quam eget morbi convallis sagittis. Quam quam ipsum in dui hendrerit. A cursus accumsan nascetur lorem tincidunt tincidunt et.</p>
            <div class="contact-info">
                <p> +62 878512 99 66666</p>
                <p>cendekiadarussalam@gmail.com</p>
            </div>
        </div>
        <div class="footer-section afiliasi">
            <h2>Afliasi</h2>
            <p>UIN Ar - Raniry</p>
        </div>
        <div class="footer-section official-account">
            <h2>Official Account</h2>
            <div class="social-icons">
                <img src="/Cendekia-Assets/Vector.png" alt="">
                <img src="/Cendekia-Assets/Vector-1.png" alt="Instagram">
                <img src="/Cendekia-Assets/Vector-2.png" alt="Facebook">
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright &copy; 2024 | IT Support Cendekia Darussalam</p>
    </div>
</footer>
<script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
</script>

<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      const target = document.querySelector(this.getAttribute('href'));
      target.scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>
</body>

</html>