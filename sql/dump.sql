CREATE TABLE agrotoxicos(
	atx_id int primary key,
	atx_nome varchar(20),
	atx_categoria int,
	foreign key (atx_categoria) references categoria_agrotoxico(cat_id)
)

create table estados(
	est_id int primary key auto_increment,
	est_nome varchar (15)
)

create table usuarios (
	usu_id int primary key auto_increment,
	usu_nome varchar (50),
	usu_sexo char (1),
	usu_nascimento date,
	usu_telefone varchar(11),
	usu_email varchar (30),
	usu_login varchar (15),
	usu_senha varchar(100),
	usu_cargo int,
	foreign key (usu_cargo) references cargo(car_id),
	usu_estado int,
	foreign key (usu_estado) references estados(est_id)
)

create table status(
	sta_id int primary key auto_increment,
	sta_descricao varchar(25)
)

create table plantacao (
	plt_id int primary key,
	plt_nome varchar(20),
	plt_responsavel int,
	foreign key (plt_responsavel) references usuarios(usu_id),
	plt_grao int,
	foreign key (plt_grao) references grao(gra_id),
	plt_data_inicio date,
	plt_data_fim date,
	plt_solo int,
	foreign key (plt_solo) references solo(sol_id),
	plt_agrotoxico int,
	foreign key (plt_agrotoxico) references agrotoxicos(atx_id),
	plt_status int,
	foreign key (plt_status) references status(sta_id)
)

create table relatorio (
	rel_id int primary key auto_increment,
	rel_nome varchar (15),
	rel_plantacao int,
	foreign key (rel_plantacao) references plantacao(plt_id),
	rel_autor int,
	foreign key (rel_autor) references usuarios(usu_id),
	rel_descricao varchar(120),
	rel_data datetime
)

CREATE TABLE `cargo` (
  `car_id` int(11),
  `car_nome` varchar(20)
)

CREATE TABLE `categoria_agrotoxico` (
  `cat_id` int(11),
  `cat_descricao` varchar(40)
)

CREATE TABLE `grao` (
  `gra_id` int(11),
  `gra_nome` varchar(20),
  `gra_tipo` varchar(40)
)

CREATE TABLE `solo` (
  `sol_id` int(11),
  `sol_nome` varchar(20),
  `sol_descricao` varchar(60)
)

----- inserts------

INSERT INTO `usuarios` (`usu_id`, `usu_nome`, `usu_sexo`, `usu_nascimento`, `usu_telefone`, `usu_email`, `usu_login`, `usu_senha`, `usu_cargo`, `usu_estado`) VALUES
(1, 'Leonardo', 'M', '2023-11-08', '4199995454', 'leo@leo.com', 'leo', 'leo123', 1, 1),
(2, 'kal', 'M', '2023-11-08', '4199995454', 'kal@kal.com', 'kal', 'kal123', 2, 20),
(3, 'bono', 'M', '2023-11-05', '4199995454', 'bono@bono.com', 'bono', 'bono123', 2, 13),
(4, 'alguem', 'F', '2023-11-01', '4199995454', 'alguem@a.com', 'alguem', 'alguem123', 3, 20),
(5, 'alguem2', 'F', '2023-11-03', '4199995454', 'alguem2@b.com', 'abcd12', 'abcd123ft', 3, 17);


INSERT INTO `status` (`sta_id`, `sta_descricao`) VALUES
(1, 'Ativa'),
(2, 'Inativa');


INSERT INTO `solo` (`sol_id`, `sol_nome`, `sol_descricao`) VALUES
(1, 'Solo roxo', 'elevado teor de fertilidade, bom para cafe'),
(2, 'Solo aluvial', 'solo fertil bastante umido, bom para arroz'),
(3, 'Solo salmorao', 'textura granulosa, baixa fertilidade'),
(4, 'Solo massape', 'alto teor de mat organica, bom para cana');


INSERT INTO `relatorio` (`rel_id`, `rel_nome`, `rel_plantacao`, `rel_autor`, `rel_descricao`, `rel_data`) VALUES
(1, 'relatorio1', 1, 4, 'problemas com vvermes resolvidos', '2023-11-06 16:47:14'),
(2, 'relatorio 2', 2, 2, 'problemas com clima chuvoso', '2023-11-08 16:47:14');


INSERT INTO `plantacao` (`plt_id`, `plt_nome`, `plt_responsavel`, `plt_grao`, `plt_data_inicio`, `plt_data_fim`, `plt_solo`, `plt_agrotoxico`, `plt_status`) VALUES
(1, 'area-H12', 2, 7, '2023-11-05', NULL, 3, 12, 1),
(2, 'area-H18', 3, 1, '2023-11-05', NULL, 4, 14, 1);


INSERT INTO `grao` (`gra_id`, `gra_nome`, `gra_tipo`) VALUES
(1, 'soja', 'leguminosa'),
(2, 'trigo', 'graminea'),
(3, 'arroz', 'graminea'),
(4, 'feijao', 'leguminoso'),
(5, 'cevada', 'graminea'),
(6, 'milho', 'graminea'),
(7, 'cafe', 'rubiaceae'),
(8, 'sorgo', 'graminea');


INSERT INTO `estados` (`est_id`, `est_nome`) VALUES
(1, 'Parana'),
(2, 'Acre'),
(3, 'Alagoas'),
(4, 'Amapá'),
(5, 'Amazonas'),
(6, 'Bahia'),
(7, 'Ceará'),
(8, 'Espírito Santo	'),
(9, 'Goiás'),
(10, 'Maranhão'),
(11, 'Mato Grosso	'),
(12, 'Mato Grosso do '),
(13, 'Minas Gerais	'),
(14, 'Pará'),
(15, 'Paraíba'),
(16, 'Pernambuco'),
(17, 'Piauí'),
(18, 'Rio de Janeiro	'),
(19, 'Rio Grande do N'),
(20, 'Rio Grande do S'),
(21, 'Rondônia'),
(22, 'Roraima'),
(23, 'Santa Catarina	'),
(24, 'São Paulo	'),
(25, 'Sergipe	'),
(26, 'Tocantins');


INSERT INTO `categoria_agrotoxico` (`cat_id`, `cat_descricao`) VALUES
(1, 'Produto extremamente toxico'),
(2, 'Produto altamente toxico'),
(3, 'Produto moderadamente toxico'),
(4, 'Produto pouco toxico'),
(5, 'Produto improvável de causar dano agudo'),
(6, 'Produto nao classificado');


INSERT INTO `cargo` (`car_id`, `car_nome`) VALUES
(1, 'administrador'),
(2, 'cliente primario'),
(3, 'funcionario');



INSERT INTO `agrotoxicos` (`atx_id`, `atx_nome`, `atx_categoria`) VALUES
(1, '2 4 D PICLORAM', 5),
(2, '2 4 D 806 SL ALAMOS', 4),
(3, '2 4 D CHDS ', 4),
(4, 'ABADAY ', 4),
(5, 'ABACUS HC ', 4),
(6, '2 4 D TECNOMYL', 4),
(7, '2 4 D CROP 806 SL', 4),
(8, '2 4 D NORTOX ', 4),
(9, 'ABADIN 72 EC', 3),
(10, 'ACCEL', 6),
(11, 'ACEFATO 750 TIDE', 5),
(12, 'ACEHERO', 2),
(13, 'MALATHION UL', 5),
(14, 'MANTIS 400 WG', 2),
(15, 'MAXPORT', 6),
(16, 'MOXIMATE WP', 1),
(17, 'NIPPON 40', 4),
(18, 'PAPILLON', 5),
(19, 'OHKAMI 10 EW', 2),
(20, 'PREVINIL', 3),
(21, 'RANDELL 648 SL', 5),
(22, 'SELETRINA', 4);






