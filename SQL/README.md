# Resolución

A continuación se encuentran los Sql's que resuelven el ejercicio planteado.

##### Modo de ejecución.

**Caso 1:**
```sql
select a.ciudad,a.cliente 
from test_1 as a, 
(
	select max(monto) as monto ,ciudad 
	from test_1 
	group by ciudad 
) as b 
where a.monto = b.monto and a.ciudad = b.ciudad 
group by a.ciudad 
order by a.ciudad,a.cliente asc;
```
| ciudad | cliente |
| ------ | ------ |
| lanus | carlos |
| olivos | tito |
| quilmes | pepe |

**Caso 2:**
```sql
select a.ciudad,a.cliente 
from test_2 as a, 
(
	select max(monto) as monto ,ciudad 
	from test_2 
	group by ciudad 
) as b 
where a.monto = b.monto and a.ciudad = b.ciudad 
group by a.ciudad 
order by a.ciudad,a.cliente asc;
```
| ciudad | cliente |
| ------ | ------ |
| lanus | carlos |
| olivos | tito |
| quilmes | fede |

**Caso 3:**
```sql
select a.ciudad,a.cliente 
from test_3 as a, 
(
	select max(monto) as monto ,ciudad 
	from test_3 
	group by ciudad 
) as b 
where a.monto = b.monto and a.ciudad = b.ciudad 
group by a.ciudad 
order by a.ciudad,a.cliente asc;
```
| ciudad | cliente |
| ------ | ------ |
| lanus | carlos |
| olivos | tito |
| quilmes | pepe |

Creo que la solución en el enunciado presentaba un error.