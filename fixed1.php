<div class=" uk-position-fixed fixed1 uk-visible@m">
    <div class="uk-margin-small uk-text-center">
        <a uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="" class="uk-icon-button"></a>
    </div>
    <div class="uk-margin-small uk-text-center">
        <div class="select_lang uk-text-center uk-margin-auto">
            <div class="uk-flex uk-flex-column">
                <a href="javascript: void(0);" onclick="myChange(this);" data-lang="vn">VN</a>
                <a href="javascript: void(0);" onclick="myChange(this);" data-lang="en">EN</a>
            </div>
            <a href="#"><span uk-icon="plus"></span></a>
        </div>
    </div>
</div>
<div class="uk-position-fixed fixed2 uk-visible@m">
    <div class="uk-margin">
        <a href="tel:0947520793">
            <div class="uk-position-relative">
                <div class="txt_hotro uk-text-uppercase uk-text-center uk-margin-small uk-position-absolute">hỗ trợ trực tuyến</div>
                <div class="boxchat_img uk-position-z-index">
                    <img src="imgs/Group.svg" alt="">
                </div>
                <span class="suntory-alo-ph-circle-fill"></span>
            </div>
        </a>
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