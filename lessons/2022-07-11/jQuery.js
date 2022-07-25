// function capitalizeFirstLetter(string) {
//     return string.charAt(0).toUpperCase() + string.slice(1);
// }

// function addItemToTableRow(value) {

// }

// function fillTable(data) {
//     if (Array.isArray(data)) {
//         for (let item of data) {
//             let row = document.createElement('tr');

//             tbody.appendChild(row);
//             add
//         }
//     }
// }

function createTable(tableData) {

    if (!Array.isArray(tableData)) {
      throw new Error("not posts array given");
    }
  
    const htmlTableElement = document.createElement("table");
    tableData.forEach(post => {
      htmlTableElement.appendChild(createTableRow(post));
    });
    return htmlTableElement;
  }
  
  function createTableRow(rowData) {
    const htmlTableRowElement = document.createElement("tr");
  
    for (const [key, value] of Object.entries(rowData)) {  
      let htmlTableTd = document.createElement("td");
      htmlTableTd.textContent = `${value}`;
      htmlTableRowElement.appendChild(htmlTableTd);
    }
  
    return htmlTableRowElement;
  }
  
  function getPosts(url) {
    return new Promise((resolve, reject) => {
      fetch(url)
        .then(response => response.json())
        .then(posts => resolve(posts))
        .catch(err => reject(err))
    });
  }
  
  
  const htmlPostsTable = document.getElementById("js-posts-table");
  
  document.getElementById("js-posts-button")?.addEventListener("click", evt => {
    getPosts("https://jsonplaceholder.typicode.com/posts")
      .then(posts => htmlPostsTable.appendChild(createTable(posts)))
      .catch(err => console.log(err));
  });