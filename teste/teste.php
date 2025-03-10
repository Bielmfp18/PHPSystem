<?php
class Escritor
{
    private string $caminho;
    //arquivo que vai escrever.
    //São 2 underlines antes do método construct.
    public function __construct(string $caminho)
    {
        $this->caminho = $caminho;
    }
    //O que vou escrever.
    public function escreve(string $conteudo)
    {
        file_put_contents($this->caminho, $conteudo, FILE_APPEND); //O caminho e o conteúdo que vou escrever e será enviado para o arquivo. 
    }
}
