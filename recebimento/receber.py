def insere_informacao(nome, sobrenome, idade):
    arq_tmp = open('/envio/form.php','a+')
    minha_string_saida = 'Seu cadastro foi feito "{}" ' .format(nome, sobrenome, idade)
    arq_tmp.write(minha_string_saida)
    arq_tmp.close()

    insere_informacao("")