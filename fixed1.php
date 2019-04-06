<div class=" uk-position-fixed fixed1">
    <div class="uk-margin-small">
        <a uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="" class="uk-icon-button"></a>
    </div>
    <div class="uk-margin-small">
        <div class="select_lang uk-text-center">
            <div class="uk-flex uk-flex-column">
                <a href="javascript: void(0);" onclick="myChange(this);" data-lang="vn">VN</a>
                <a href="javascript: void(0);" onclick="myChange(this);" data-lang="en">EN</a>
            </div>
            <a href="#"><span uk-icon="plus"></span></a>
        </div>
    </div>
</div>
<script>
    function myChange(e) {
        var tmp;
        tmp = e.getAttribute("data-lang");
        console.log(tmp);
        document.getElementsByTagName("html")[0].setAttribute("lang", tmp)
    }
</script>