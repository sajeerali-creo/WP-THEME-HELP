<script>
function goWhatsapp() {
	var url = window.location.href;
	var wpurl = 
	"https://api.whatsapp.com/send?phone=[number]&text=Hi, I am interested in your product on oramibags. Link:" + url;
	window.open(wpurl, "_blank").focus();
</script>


<button onclick=goWhatsapp()>Watsap</button>