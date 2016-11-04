$(document).ready(function(){

    function getPosts()
    {
      var content = "";
      $.get("PHP/showPosts.php",function(data){
        $.each(data,function(i){
          content += "<p>";
          content += data[i].content;
          content += "</p>";
          $("#post-container").html(content);
        });
      },"json");
      content = "";
    }

  $("#submit").on("click",function(){
      var content = $("#message").val();
      $.post("PHP/update.php",{message : content},function(){
        getPosts();
      });

    });
});
