const departamento = document.getElementById('departamento');
const municipio = document.getElementById('municipio');
const form = document.getElementById('form');

// eventos
departamento.addEventListener('change', () => {
    if (departamento.value !== null){
        getMunicipios(departamento.value)
    }
})

form.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData(e.target)

    fetch('resultado.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        municipio.innerHTML = '<option>-- Seleccione --</option>';
        form.reset();
    })
    .catch(error => {
        console.error('Error:', error);
    });
})


// funciones
const getMunicipios = (id) => {
    const url = "http://localhost:3307/EjerciciosPHP/Practica-7/municipios.php?id=" + id
    fetch(url, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        if (response.ok){
            return response.json();
        } else {
            throw new Error('Error en la petición');
        }
    })
    .then(data => {
        municipio.innerHTML = '';
        data.forEach(element => {
            municipio.innerHTML += `
                <option value="${element.id}">
                    ${element.nombre}
                </option>
            `
        })
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
