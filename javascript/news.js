function getNews(){
    $.get("get_news.php", function(data){
        alert(data)
    })
}