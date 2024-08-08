import requests

url_obter_dados = 'http://localhost/Comunicacao-main(3)/Comunicacao-main/envio/form.php'
response = requests.get(url_obter_dados)

if response.status_code == 200:
    try:
        dados = response.json()  
        print('Dados recebidos:', dados)
    except ValueError:
        print('Resposta não está no formato JSON.')
else:
    print('Falha ao obter dados. Status code:', response.status_code)

payload = {'id': 'nome'}

url_enviar_dados = 'http://localhost/Comunicacao-main(3)/Comunicacao-main/recebimento/recebe.php'
response = requests.post(url_enviar_dados, json=payload)

if response.status_code == 200:
    try:
        resposta = response.json()
        print('Resposta do servidor:', resposta)
    except ValueError:
        print('Resposta não está no formato JSON.')
else:
    print('Falha ao enviar dados. Status code:', response.status_code)
