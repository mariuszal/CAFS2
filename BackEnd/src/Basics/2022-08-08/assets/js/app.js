window.addEventListener('DOMContentLoaded', (event) => {
    document.querySelector('#submit')?.addEventListener('click', function(){
        const data = {};

        document.querySelector('#profile [name]')?.forEach(el => {
            const name = el.getAttribute('name');

            if(name.endsWith('[]') && el.checked) {
                name = name.replace('[]', '');
                if(!(name in data)) {
                    data[name] = [];
                }
                if(el.checked) {
                data[name].push(el.value);
                }
            } else {
                data[name] = el.value;
            }
            
        });
        console.log(data);
    });
});