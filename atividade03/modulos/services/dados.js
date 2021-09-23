function clientes(){
    return([{
        id:'01',
        nome:'Marcio',
        sobrenome:'cavalcante',
        formação:'RH',
        profissoes:'desisner,programador',
        telefone:'+5596981325410',
        endereco:'avenida carlos almeida de souza, N° 1750 CEP: 68909818 - Novo Horizonte, Macapá-AP'
    },
    {
        id:'02',
        nome:'Julio',
        sobrenome:'Alvarega',
        formação:'Estudante',
        profissoes:'Estudante',
        telefone:'+5596981149496',
        endereco:'avenida carlos almeida de souza, N° 1780 CEP: 68909818 - Novo Horizonte, Macapá-AP'
    }

])
}

function fornecedores(){
    return([{
        id:'01',
        nome:'Marcio',
        sobrenome:'cavalcante',
        cidade:"Fortaleza-CE",
        fornece:'Sapatos Nike',
        telefone:'+5561981325410',
        endereco:'avenida das Mangueiras, N° 1750 CEP: 00000-00, Buritis, Fortaleza-CE'
    },
    {
        id:'02',
        nome:'Marcio',
        sobrenome:'cavalcante',
        cidade:"Fortaleza-CE",
        fornece:'Sapatos Nike',
        telefone:'+5561981325410',
        endereco:'avenida das Mangueiras, N° 1750 CEP: 00000-00, Buritis, Fortaleza-CE'
    }

])
}
function financeiro(){
    return([
        {
        id:'02',
        ano:'2021',
        mes:'Setembro',
        dia:"25",        
        vendas:'5.000,00'
    },
    {
        id:'01',
        ano:'2021',
        mes:'Setembro',
        dia:"25",        
        vendas:'5.000,00'
    }

])
}
function produtos(){
    return([
        {
        id:'01',
        marca:'CaterPiller',
        modelo:'adventure',
        tamanho:"39",        
        categoria:'bota',
        vlcompra:'100,00',
        vlvenda:'120,00',
        urlimg:'prod-1.jpg',
        vendido:'400',
        estoque:'200'
    },
    {
        id:'02',
        marca:'CaterPiller',
        modelo:'adventure',
        tamanho:"39",        
        categoria:'bota',
        vlcompra:'100,00',
        vlvenda:'120,00',
        urlimg:'prod-2.jpg',
        vendido:'400',
        estoque:'200'
    }

])
}