let userInfoOutput = document.getElementById("main");

const user = {
    name: 'Marius',
    lastName: 'Zalieckas',
};

userInfoOutput.innerHTML = `<H2>User info</H2><p>Vartotojo vardas yra ${user.name}, o pavarde ${user.lastName}`;