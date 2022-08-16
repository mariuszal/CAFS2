function handleResponse(content) {
	console.log(content);
	
  	alert(content.message);
	window.location.href = "user-info.jpg";
}

window.addEventListener('DOMContentLoaded', (event) => {
		// https://developer.mozilla.org/en-US/docs/Web/API/FormData
	document.querySelector('#submit-ajax-FormData')?.addEventListener('click', async function() {
		const formData = new FormData();

		document.querySelectorAll('#profile [name]')?.forEach(el => {
			const elementAttrType = el.getAttribute('type');

			if (elementAttrType == 'checkbox' && !el.checked) {
				return;
			}

			if (elementAttrType == 'file') {
				formData.append(el.getAttribute('name'), el.files[0]);
			} else {
				formData.append(el.getAttribute('name'), el.value);
			}
		});

		const rawResponse = await fetch(window.location.href, {
			method: 'POST',
			body: formData,
			headers: {
				'Accept': 'application/json',
			},
		});
		
		const content = await rawResponse.json();

  		handleResponse(content);
	});
});