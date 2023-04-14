'use strict';

const limparFormulario = (endereco) => {
    document.getElementById('rua').value     = "";
    document.getElementById('bairro').value  = "";
    document.getElementById('cidade').value  = "";
    document.getElementById('uf').value      = "";
}

const preencherFormulario = (endereco) => {
    document.getElementById('rua').value = endereco.logradouro;
    document.getElementById('bairro').value = endereco.bairro;
    document.getElementById('cidade').value = endereco.localidade;
    document.getElementById('uf').value = endereco.uf;
}

const cepValido = (cep) =>  /^[0-9]{5}-[0-9]{3}$/.test(cep);

const pesquisarCep = async () => {
    const cep = document.getElementById('cep').value;
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    if (cepValido(cep)) {
        const dados = await fetch(url);
        const endereco = await dados.json();

        if (endereco.hasOwnProperty('erro')) {
            document.getElementById('cep').style.border = '1px solid red';
            document.getElementById('rua').value = 'Rua inválida';
            document.getElementById('bairro').value = 'Bairro inválido';
            document.getElementById('cidade').value = 'Cidade inválida';
            document.getElementById('uf').value = 'Estado inválido';
        } else {
            document.getElementById('cep').style.backgroundColor = '#aacde0';
            document.getElementById('cep').style.border = '1px solid green';
            document.getElementById('cep').style.fontSize = '0.9em';
            document.getElementById('cep').style.fontWeight = '700';
            preencherFormulario(endereco);
        }
    } else {
        document.getElementById('cep').style.fontSize = '0.7rem';
        document.getElementById('cep').value = 'Campo obrigatório!';
        document.getElementById('cep').style.border = '1px solid red';
        limparFormulario(endereco);
    }
    // OR ---->  fetch(url).then(response => response.json).then(console.log);
}

document.getElementById('cep')
    .addEventListener('focusout', pesquisarCep);

