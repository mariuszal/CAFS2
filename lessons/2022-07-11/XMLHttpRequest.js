function loadPosts() {
let xhr = new XMLHttpRequest();

xhr.addEventListener('load', function(){
    if(this.status == 200) {
    console.log(this.responseText);
    }
});


xhr.open('GET', 'http://jsonplaceholder.typicode.com/posts');

xhr.send();
}

document.querySelector('button').addEventListener('click', function() {
    loadPosts();
});
