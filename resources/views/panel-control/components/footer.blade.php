<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; <span id="year"></span> <div class="bullet"></div> Design By <a href="https://nauval.in/">Cici Indriani</a>
    </div>
    <div class="footer-right">

    </div>
</footer>
{{-- script untuk menampilkan tahun sekarang --}}
<script>
    const year = new Date().getFullYear();
    document.getElementById("year").innerHTML = year;
</script>