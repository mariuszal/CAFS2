function loadPosts() {
fetch('http://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then(data => console.log(data));
}

document.querySelector('button').addEventListener('click', function() {
    loadPosts();
});
