# Resolución

Código de la resolucion se encuentra en /src

##### Parámetros.

  - **file**: Parámetro requerido, archivo de entrada de datos a procesar.
  - **output**: Parámetro opcional, archivo de destino donde se mostraran los resultados de la ejecución.

##### Modo de ejecución.

Caso 1:
```sh
src$ php index.php --file ../test_case_1
File result: ../test_case_1_output
>>>>>> End Proccess <<<<<<
```
Caso 2:
```sh
src$ php index.php --file="../test_case_2" --output="../result_case_2"
File result: ../result_case_2
>>>>>> End Proccess <<<<<<
```

Caso 3:
```sh
src$ php index.php --file="../test_case_3" --output="../result_case_3"
File result: ../result_case_3
>>>>>> End Proccess <<<<<<
```
