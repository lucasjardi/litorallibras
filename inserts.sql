-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela libras.glossario: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `glossario` DISABLE KEYS */;
INSERT INTO `glossario` (`id`, `categoria`, `descricao`, `created_at`, `updated_at`) VALUES
	(1, 'Adjetivos', 'Sinais de adjetivos mais usuais no litoral norte gaúcho, segundo a pesquisa realizada.', '2019-02-15 02:18:00', '2019-02-19 02:16:05'),
	(2, 'Verbos', 'Sinais de verbos mais usuais no litoral norte gaúcho, segundo a pesquisa realizada.', '2019-02-15 02:18:38', '2019-02-19 02:16:39'),
	(3, 'Objetos', 'Sinais de objetos mais usuais no litoral norte gaúcho, segundo a pesquisa realizada.', '2019-02-15 02:19:06', '2019-02-19 02:16:23'),
	(4, 'Cidades do litoral norte', 'Sinais de algumas cidades do litoral norte gaúcho, segundo a pesquisa realizada.', '2019-02-15 02:19:40', '2019-02-19 02:16:31');
/*!40000 ALTER TABLE `glossario` ENABLE KEYS */;

-- Copiando dados para a tabela libras.litoral_libras: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `litoral_libras` DISABLE KEYS */;
INSERT INTO `litoral_libras` (`id`, `titulo`, `titulo_youtube_id`, `texto`) VALUES
	(1, 'Litoral Libras', 'EdApC6igp8w', 'Este site foi desenvolvido a partir de um projeto de pesquisa, realizado no âmbito do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul - Campus Osório (para saber mais sobre o estudo, acesse o menu Quem Somos).\r\n\r\nEle tem por objetivo, fornecer a comunidade do litoral norte gaúcho, tanto surda, quanto ouvinte, uma plataforma de aprendizagem de Língua Brasileira de Sinais. O site contém materiais teóricos, com diversas informações importantes acerca do sujeito surdo, da Libras, da comunidade e cultura surda, entre outras. Além desse material, conta também com um glossário, composto por sinais de acordo com a variação linguística local. Os sinais presentes foram os que constatamos mais usuais em nossa região.\r\n\r\nO site Litoral Libras tem o objetivo de promover a acessibilidade comunicativa entre surdos e ouvintes no litoral norte gaúcho, promovendo a Libras na região.');
/*!40000 ALTER TABLE `litoral_libras` ENABLE KEYS */;

-- Copiando dados para a tabela libras.materialteorico: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `materialteorico` DISABLE KEYS */;
INSERT INTO `materialteorico` (`id`, `titulo`, `texto`, `created_at`, `updated_at`) VALUES
	(1, 'Surdez', 'De acordo com MONTEIRO, SILVA e RATNER a surdez é uma condição que causa ao indivíduo incapacidade de identificar alguns sons. Ela pode ser classificada quanto aos tipos: perda auditiva condutiva  perda auditiva sensorial. No primeiro caso, geralmente ocorre devido a obstruções na orelha externa. No segundo, por problemas em algumas células cocleares. E, também pode ser classificada, quanto às causas: cognitiva (o sujeito já nasce com a condição) ou adquirida (como consequência de alguma complicação ou doença). \r\n\r\nComo é citado no artigo “Surdez e Diagnóstico: narrativas de surdos adultos”, a única barreira que os deficientes auditivos têm de enfrentar, é a da comunicação, o que impede que estes sujeitos interajam e sejam incluídos, de fato, em suas famílias (pensando em país ouvintes e não sinalizadres, como ocorre na maioria dos casos) e na sociedade (que possui uma língua materna falada e não busca o aprendizado da língua de sinais). \r\n\r\nAté a década de 1970, a surdez foi vista como uma deficiência, quando há uma falta, anomalia, imperfeição (neste caso, na audição), como conceitua Harlan Lane, em seu artigo “Do Deaf People Have a Disability?”. Neste contexto, considerando a surdez uma deficiência, surge o modelo clínico-terapêutico, adotado pelos profissionais da saúde e educação para tratar as pessoas surdas (BISOL, SPERB. 2010). O modelo estava centrado no pensamento de que estes sujeitos, portadores de uma anomalia, teriam menos capacidade intelectual e de integração social do que os ouvintes, que se utilizavam da língua falada, normal. Assim, eram incentivados fortemente implantes cocleares e uso de próteses. Além, é claro, da introdução da língua falada de forma forçada a estas crianças (prática conhecida como oralismo).\r\n\r\nA partir da década de 1960, se inicia um período de ruptura com este modelo clínico- terapêutico, para um modelo socioantropológico, que vê a surdez por um viés cultural. E, também, há uma nova compreensão da surdez como uma diferença, e não mais como deficiência. \r\n\r\nEsta ideia é a aceita até os dias de hoje, sobretudo pelas comunidades surdas. No Brasil, ela se consolida ainda mais com o reconhecimento da Língua Brasileira de Sinais - Libras no ano de 2002, pela lei 10.436. Isto faz com que o ´nico aspecto que diferencie o surdo do ouvinte seja a modalidade da língua, não uma deficiência.', '2019-02-15 03:45:57', '2019-03-12 17:14:41'),
	(3, 'Variações linguísticas em Libras', 'A língua é uma das principais instituições que caracterizam e compõe a cultura de determinado grupo de indivíduos. É através dela que os sujeitos constroem sua identidade e manifestam a cultura, da qual fazem parte, assim também é com os surdos. \r\n\r\nA língua como constituinte de uma cultura não é uniforme e universal para todas as pessoas, ela varia de acordo com cada grupo, localidade e outros. Desta mesma forma, ao contrário do que muitos pensam, as línguas de sinais também são distintas em cada lugar do mundo, apresentando variações linguísticas de país para país, estado para estado e até de região para região. Desta forma \r\ndizer que todos os brasileiros falam o mesmo português é uma inverdade, na mesma proporção que é inverdade dizer que todos os surdam usam a mesma Libras. Afirmar essa unidade é segar a variedade de línguas, quando de fato, nenhuma língua é uniforme, homogênea. (GESSER, 2009: 39)\r\n\r\nQuando falamos em variedades linguísticas na Língua de Sinais, devemos considerar até mesmo a forma como cada indivíduo realiza determinado sinal, percebendo que cada um utiliza a língua de uma maneira diferente do outro. Denomina-se idioleto esta maneira única e característica de cada sujeito em utilizar a língua.  \r\n\r\nComo já foi mencionado a Libras - Língua Brasileira de Sinais não apresenta uma unidade ao longo de todo o território brasileiro, e por isso apresenta variações que podemos assemelhar aos "sotaques" nas línguas faladas, de acordo com a proximidade das pessoas. Desta forma comunidades de diferentes localidades apresentam diferenciações no modo como sinalizam. Estas diferenças no modo como os grupos de diferentes regiões utilizam a língua é denominado dialetos, conforme cita Karnopp em seu artigo Fonética e Fonologia. \r\n\r\nVale ressaltar que não existe uma língua certa, uma norma padrão. Cada comunidade adequa a língua ao seu uso. Menosprezar ou desconsiderar o modo subjetivo como determinado grupo se utiliza da língua, pode ser considerado preconceito linguístico.', '2019-02-15 03:47:55', '2019-03-12 17:15:28'),
	(4, 'Identidade e cultura surda', 'O que diferencia o deficiente auditivo do sujeito surdo é o uso da Libras, como primeira língua ou não. A língua é a principal, mas não única, organizadora da identidade dos sujeitos que constituem determinada comunidade. Assim as línguas de sinais conferem, às pessoas surdas, sua identidade própria. E, esta, seria adquirida apenas com o contato com outro surdo (SANTANA, BERGAMO. 2005).\r\n\r\nA partir das línguas de sinais, a pessoa surda também adquire uma cultura. O conceito mais corriqueiro, e o mais encontrado nos dicionários, é de que a cultura é um conjunto de produções e práticas, de um determinado grupo, como: língua, artes (literatura, música, teatro, etc), religião, ideias, costumes. Para Poche (1989), a língua e a cultura são duas produções paralelas, mas a língua é um “recurso” importante na constituição da cultura. Quando nos referimos à surdez, a cultura ganha um novo significado. \r\n\r\nNa área da surdez encontra-se geralmente o termo “cultura” como referência à língua (de sinais), às estratégias sociais e aos mecanismos compensatórios que os surdos realizam para agir no/sobre o mundo, como o despertador que vibra, a campainha que aciona a luz, o uso de fax em vez de telefone, o tipo de piada que se conta etc. (SANTANA, BERGAMO. p. 572. 2005)\r\n\r\nAssim, a cultura surda se manifesta através de suas produções literárias, sua comunidade seus diálogos, etc. Embora seja pertencente a um grupo minoritário, vem se consolidando e legitimando cada vez mais, principalmente com a oficialização da Libras pela lei 10.436/2002, e Decreto 5.626/2005, que define o sujeito surdo.', '2019-02-15 03:48:53', '2019-03-12 17:20:02'),
	(5, 'Legislações', 'Hoje, existem no Brasil, uma Lei e um Decreto que tratam acerca da Língua Brasileira de Sinais - Libras em nosso país, além das demais leis existentes acerca da pessoa com deficiência, inclusão, ações afirmativas (como a Lei 13.146 de 6 de Julho de 2015: Lei Brasileira de Inclusão a Pessoa com Deficiência e Lei no 10.098, de 19 de dezembro de 2000: Lei de Acessibilidade). \r\n\r\n    A Lei 10.436 de 24 de abril de 2002, foi a responsável por legitimar a Libras em nosso país, e reconhecê-la como segundo idioma oficial do Brasil. \r\n\r\nArt. 1º É reconhecida como meio legal de comunicação e expressão a Língua Brasileira de Sinais - Libras e outros recursos de expressão a ela associados.  \r\n\r\nParágrafo único. Entende-se como Língua Brasileira de Sinais - Libras a forma de comunicação e expressão, em que o sistema lingüístico de natureza visual-motora, com estrutura gramatical própria, constituem um sistema lingüístico de transmissão de idéias e fatos, oriundos de comunidades de pessoas surdas do Brasil. (BRASIL, 2002) \r\n\r\n    O Decreto 5.626 de 22 de dezembro de 2005, se responsabiliza por regulamentar a Lei 10.436, bem como o art. 18 da Lei no 10.098. Além disso, dispõe sobre a educação de surdos no Brasil, a formação de professores e profissionais tradutores/intérprete, o papel do Estado sobre o sujeito surdo, o acesso do mesmo aos recursos disponíveis a sociedade, etc. Ainda define o sujeito surdo, bem como sua cultura e identidade. \r\n\r\nArt. 2o  Para os fins deste Decreto, considera-se pessoa surda aquela que, por ter perda auditiva, compreende e interage com o mundo por meio de experiências visuais, manifestando sua cultura principalmente pelo uso da Língua Brasileira de Sinais - Libras.', '2019-02-15 03:49:55', '2019-03-12 17:21:03'),
	(6, 'Língua Brasileira de Sinais', 'É necessário estar claro a todos que as línguas de sinais não estão associadas à mímicas, pantomimas e gestos banais. As línguas de sinais, bem como as línguas orais são naturais, genuínas e legítimas, diferindo apenas pela sua modalidade gestual/visual. É um canal comunicativo efetivo e complexo, capaz de expressar e ideias conceitos abstratas.  \r\n\r\nNo Brasil, a Libras - Língua Brasileira de Sinais, foi oficializada segunda língua oficial do país, marcando uma grande conquista na luta dos movimentos sociais da comunidade surda. A oficialização se deu através da Lei 10.436 de abril de 2002, que dispõe sobre a Libras - Língua Brasileira de Sinais e dá outras providências; \r\n\r\nArt. 1º É reconhecida como meio legal de comunicação e expressão a Língua Brasileira de Sinais - Libras e outros recursos de expressão a ela associados.  \r\n\r\nParágrafo único. Entende-se como Língua Brasileira de Sinais - Libras a forma de comunicação e expressão, em que o sistema lingüístico de natureza visual-motora, com estrutura gramatical própria, constituem um sistema lingüístico de transmissão de idéias e fatos, oriundos de comunidades de pessoas surdas do Brasil. (BRASIL, 2002) \r\n\r\nO que confere a ela status de língua, é o fato de possuir uma gramática própria e estrutura composta por níveis lexicais: fonológico, morfológico, sintático e semântico. Ainda apresenta outros aspectos linguísticos, como flexibilidade, descontinuidade e arbitrariedade.', '2019-02-15 03:52:25', '2019-03-12 17:21:33');
/*!40000 ALTER TABLE `materialteorico` ENABLE KEYS */;

-- Copiando dados para a tabela libras.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando dados para a tabela libras.quemsomos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `quemsomos` DISABLE KEYS */;
INSERT INTO `quemsomos` (`id`, `titulo`, `titulo_youtube_id`, `texto`) VALUES
	(1, 'Quem Somos', 'mR8aKBbwz-o', 'Somos um grupo de alunos e professores do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul - Campus Osório, compromissado com estudos e ações relacionadas a inclusão das pessoas com deficiência, acessibilidade, Libras, entre outros temas relacionados. \r\n\r\nDesenvolvemos diversas ações de ensino, pesquisa e extensão desde o ano de 2014 em nossa instituição, sempre visando ampliar a acessibilidade e incluir todas as pessoas em nossa comunidade.\r\n\r\nNosso projeto mais recente, e o que deu origem a esta plataforma, é entitulado Estudos acerca das variações linguísticas de Língua Brasileira de Sinais no litoral norte gaúcho. Abaixo segue o resumo desta pesquisa, a qual tem como um de seus resultados, o site Litoral Libras. \r\n\r\nA Língua Brasileira de Sinais é uma língua legítima e genuína como as demais, diferindo apenas por sua modalidade gestual-visual. Ela não apresenta unidade e sofre variações. Em nossa localidade, essas diferenciações são também perceptíveis e marcantes. Observamos que a comunidade surda do litoral norte gaúcho vem apresentando uma crescente demanda por plataformas de estudos de Libras, direcionadas à região. Assim, objetivamos analisar alguns sinais realizados por sujeitos surdos do litoral norte gaúcho e compará-los com os encontrados em dicionários de Libras de outras localidades, para averiguarmos as variações linguísticas existentes. Após, buscamos produzir um site, contendo materiais didáticos específicos à região, que auxiliarão no processo de difusão dessa língua. Primeiramente, elencamos 5 cidades da região: Capão da Canoa, Imbé, Osório, Santo Antônio da Patrulha e Tramandaí. Nestas, definimos 1 sujeitos de pesquisa surdo. Reunimo-nos com cada um para a aplicação de um formulário contendo questionamentos relevantes ao estudo e para registrarmos a forma como sinalizavam determinados sinais. Estes sinais compuseram 4 listas de diferentes vocabulários: adjetivos, nomes de cidades do litoral norte, objetos e verbos. Durante a análise de dados, buscamos perceber, primeiramente, as variações existentes entre a comunidade surda local. Após, comparamos os sinais realizados por eles com aqueles encontrados no Minidicionário da Faders e, ainda, com os encontrados no Dicionário Enciclopédico Trilíngue. Concluídas as análises, podemos constatar que o sujeito de Capão da Canoa é o que mais varia em relação aos das demais cidades da região, enquanto o de Imbé é o que mais varia em relação aos sinais encontrados em ambos os dicionários analisados. Entendemos que promover o aprendizado da Libras na região seja a forma mais efetiva de incluir os sujeitos surdos em nossa comunidade.');
/*!40000 ALTER TABLE `quemsomos` ENABLE KEYS */;

-- Copiando dados para a tabela libras.sinais_users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sinais_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `sinais_users` ENABLE KEYS */;

-- Copiando dados para a tabela libras.users: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `cidade`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Lucas Jardim da Silva', 'lcsjardim@gmail.com', 'Tramandaí', NULL, '$2y$10$NJ/i1n9i2nVqmc6X3oE2uefAtREcHyo3hSS7hQSy4fl.I0Krm3IAa', 1, 'u9xkPBkJgImuTvfgpVr6zMTIf92F66zrQyges6rJAMmNA4RVToIPUThV0VHI', '2019-02-06 15:43:43', '2019-02-06 15:43:43'),
	(3, 'Teste Conta', 'lucas@email.com', 'Tramandaí', NULL, '$2y$10$8tZ8BWl0PE7ICOHOOgddgelCyZNNinzHMiaaayZ0Cqs28OG8an0ri', 0, 'KZtIzMXHLDFFkH6F7ewr6ZQowMEdeaOth9PcBlvy01khfCOUnNBktlfVJs9o', '2019-02-09 18:57:14', '2019-02-09 18:57:14'),
	(4, 'Ana Clara', 'anaclarajardim.acj3@gmail.com', 'Tramandaí', NULL, '$2y$10$Aogq8f0cg8onymmp449RzuCSzxtTRJiIE8u4ml0os7H/awaYBMjMW', 1, 'KANWTGkACf7YtFDjFUuZCJC2s6iIzbulOf8oDLQzwGVLcXe7zLwVVpfndO93', '2019-02-15 02:02:16', '2019-02-15 02:02:16');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando dados para a tabela libras.videos: ~31 rows (aproximadamente)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `glossario_id`, `youtube_id`, `descricao`, `created_at`, `updated_at`) VALUES
	(2, 1, 'cYrDknFS764', 'Inteligente', '2019-02-15 02:43:25', '2019-02-18 16:24:12'),
	(3, 1, 'XE6pPWpyVTw', 'Duro', '2019-02-15 02:43:57', '2019-02-18 16:24:33'),
	(4, 1, 'FMPdI1SBDK0', 'Estranho', '2019-02-15 02:44:22', '2019-02-18 16:24:56'),
	(5, 1, 'C9yU1XCnXX8', 'Divertido', '2019-02-15 02:44:52', '2019-02-18 16:25:21'),
	(6, 2, 'EZxqg0-ws5U', 'Convidar', '2019-02-15 02:46:11', '2019-02-18 16:25:58'),
	(7, 2, 'Tx-laymRnAc', 'Economizar', '2019-02-15 02:46:36', '2019-02-18 16:26:13'),
	(8, 2, 'ab28pJxNd9o', 'Desenvolver', '2019-02-15 02:47:10', '2019-02-18 16:26:40'),
	(9, 2, '_7SwDNelA08', 'Imaginar', '2019-02-15 02:47:52', '2019-02-18 16:27:02'),
	(10, 2, 'VXY1J6LPQTk', 'Machucar', '2019-02-15 03:01:02', '2019-02-18 16:28:16'),
	(11, 2, 'Eym-5gJkcjw', 'Obedecer', '2019-02-15 03:02:48', '2019-02-18 16:28:41'),
	(12, 2, 'CfH-SZFQJn8', 'Pesquisar', '2019-02-15 03:08:35', '2019-02-18 16:29:08'),
	(13, 3, 'jqxpJNX96b0', 'Documento', '2019-02-15 03:09:05', '2019-02-18 16:29:36'),
	(14, 3, '4ZcBIJT02-4', 'Guardanapo', '2019-02-15 03:10:20', '2019-02-18 16:30:08'),
	(15, 3, 'A8DlE4w9KMM', 'Cartão', '2019-02-15 03:14:42', '2019-02-18 16:30:37'),
	(16, 3, 'dBPkFygMkQQ', 'Óculos', '2019-02-15 03:15:07', '2019-02-18 16:31:05'),
	(18, 3, '5ErUDK-uwqs', 'Colchão', '2019-02-15 03:16:03', '2019-02-18 16:31:39'),
	(19, 3, 'ay9wgj06_J0', 'Computador', '2019-02-15 03:18:39', '2019-02-18 16:32:05'),
	(20, 1, 'ZRP1LL9pNBo', 'Colar', '2019-02-15 03:19:18', '2019-02-18 16:32:32'),
	(21, 4, 'cvXgXYSwroE', 'Capão da Canoa', '2019-02-15 03:20:11', '2019-02-18 16:38:09'),
	(22, 4, '0xqRlJ2lmXU', 'Cidreira', '2019-02-15 03:20:52', '2019-02-18 16:37:39'),
	(23, 4, 'JoBAEXlcTLI', 'Imbé', '2019-02-15 03:21:10', '2019-02-18 16:37:14'),
	(24, 4, 'CF8wpq_2LFM', 'Osório', '2019-02-15 03:21:37', '2019-02-18 16:36:55'),
	(25, 4, 'zr1d8r76GuY', 'Palmares do Sul', '2019-02-15 03:22:09', '2019-02-18 16:36:33'),
	(26, 4, 'bt9nfC4xNbs', 'Santo Antônio da Patrulha', '2019-02-15 03:22:39', '2019-02-18 16:36:14'),
	(27, 4, 'G_GZejaDE7k', 'Balneário Pinhal', '2019-02-15 03:23:16', '2019-02-18 16:35:45'),
	(28, 4, '8rG3CM8nezo', 'Capivari do Sul', '2019-02-15 03:23:44', '2019-02-18 16:35:13'),
	(29, 4, 'mJXc155ReCY', 'Tramandaí', '2019-02-15 03:24:08', '2019-02-18 16:34:51'),
	(30, 4, 'TotnZmBfuXg', 'Torres', '2019-02-15 03:24:34', '2019-02-18 16:34:30'),
	(31, 4, 'FLofR-lf8Bg', 'Arroio do Sal', '2019-02-15 03:24:59', '2019-02-18 16:34:01'),
	(32, 4, 'dlw8o-HDM8Y', 'Maquiné', '2019-02-15 03:25:20', '2019-02-18 16:33:42'),
	(33, 4, 'Uu_LYhRJez4', 'Terra de Areia', '2019-02-15 03:25:46', '2019-02-18 16:33:20'),
	(34, 4, 'QZGkI0f53eE', 'Xangri-lá', '2019-02-15 03:26:12', '2019-02-18 16:32:59');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;