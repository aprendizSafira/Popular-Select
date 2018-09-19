# Popular Select a partir de outro

Lógica

1- Fazer a listagem do primeiro select

2- Ação javascript "onchange" ao selecionar um item do primeiro select ele captura esse item.

3- Requisição ajax, enviando esse item selecionado.

4- Cria um JSON com as opções e retorna.

5- Usa o JSON pra popular o SEGUNDO select.

-connect.php : Conecção com banco de dados

-views/home.php : Exibe o formulário e chama a função javascript passando as informação por paramêtro com o evento 'onchange'

-assets/js/script.js : Recebe os dados enviado pelo formulário manda via ajax para o arquivo controllers/homeController.php e cria o metódo pegar_aulas()

-controllers/homeController.php : Instância a class Aulas.php que está na pasta models e organiza os dados

-models/Aulas.php : Faz a requisição ao banco de dados pedindo para selecionar as aulas de acordo com o id_modulo