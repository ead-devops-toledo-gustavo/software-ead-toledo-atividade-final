-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2022 às 14:03
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `toledo_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `hashsenha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `hashsenha`) VALUES
(2, 'Gustavo', 'gustavolpp@g1mail.com', 'Gu010203#', ''),
(3, 'Gustavo', 'gustavolpp@gmail11.com', 'Gu010203#', ''),
(6, 'Gustavo', 'gustavolpp@gmail1111.com', 'Gu010203#', ''),
(7, 'Gustavo', 'gustavoklpp@gmail.com', 'Gu010203#', ''),
(8, 'Fulano', 'fulano@email.com', 'Gu010203#', ''),
(10, 'Gustavo', 'gustavkkkolpp@gmail.com', 'Gu010203#', ''),
(12, 'Gustavo', 'gusta444vol4444pp@gmail.com', 'Gu010203@', ''),
(13, 'Gustavo', 'gustateestevolpp@gmail.com', 'Gu010203@', ''),
(15, 'Gustavo', 'gugggggggstavolpp@gmail.com', 'Gu010203@', ''),
(17, 'Gustavo', 'gustavohhhhhhkjlpp@gmail.com', 'Gu010203@', ''),
(19, 'Gustavo', 'ggostjjjustavolpp@gmail.com', 'Gu010203@', ''),
(20, 'Gustavo', 'teste@gmail.com', 'Gu010203@', ''),
(21, 'Gustavo', 'hashgustavolpp@gmail.com', 'Gu010203@', '$2y$10$0sInPBtuh4Aaf9wDfX.6AOPCIO8LKVg6XyFPoTvePOm'),
(28, 'Gustavo', 'gus44444444tavolpp@gmail.com', 'Gu010203@', '$2y$10$B5zeP4VJpRkfYxO8KgPX1OWi58mRW5BpZ09qsZ0tir4'),
(29, 'Gustavo', 'gustdaniloavolpp@gmail.com', 'Gu010203@', '$2y$10$xaGM.35HIDdWPTCJARFxa.MHC3nDpizO2Senw1xnLiK'),
(35, 'Gustavo', 'testenovo@email.com', 'Gu01020304@', '$2y$10$sDvqqbR/ua7EcINQ5zU/xuYZDll33yyNDalqbm8e1P5'),
(36, 'Gustavo', 'testerdff@email.com', 'Gu010203@', '$2y$10$MgAfQcKQ4/VH/VJG1GeuNe52WXth9/UNxQI/4Odj0Ov'),
(38, 'Gustavo', 'testetetewtetete@gmail.com', 'Gu010203@', '$2y$10$oN14MC4iWaXAUEbCZ.1gsuCBvXxNwP.d3x3zbNbT3O3'),
(44, 'Gustavo', 'testefinal@gmail.com', 'Gu010203@', '$2y$10$ITVru/yjYHa4pXuMaGlIX.lBjqXqIWSMQd6QgyYO2VX'),
(46, 'Gustavo', 'testegustavolpp@gmail.com', 'Gu010203@', '$2y$10$d7L6XzMI5zYidLuK3dyP5.XK1tJwFVD3OSF7wcLNvX.'),
(48, 'Gustavo', 'testegusteste@gmail.com', 'Gu010203@', '$2y$10$URti2pPnw.808koMXM8dq.v9JLrRPW9TX7p6nRigpoQ'),
(54, 'Gustavo', 'new@gmail.com', 'Gu010203@', '$2y$10$yJki61hfpPGytig8dA3uSuwj7c6JIiCgSSHEHzdYeOh'),
(55, 'Gustavo', 'new1@gmail.com', 'Gu010203@', '$2y$10$qZhB.Fu8Z9nAgbfdWjCxkOxGue9mpUa7osamvoCk8BL'),
(57, 'Gustavo', 'new11@gmail.com', 'Gu010203@', '$2y$10$GADAdFLyvlCs77Ex1TPyMe4ZDqKAPwFJUXeVZdlvTSI'),
(59, 'Gustavo', 'new1122@gmail.com', 'Gu010203@', '$2y$10$dFxH9hGxUFy4UB7m6/lhweZHf4LCWKhpEatw2lxPR0X'),
(61, 'Gustavo', 'new1255@gmail.com', 'Gu010203@', '$2y$10$sp8Owxhbi28iTUmAkqA2ju/Y9A2TaENqFL7rYb9CJiG'),
(65, 'Gustavo', 'novonew@gmail.com', 'Gu010203@', '$2y$10$gOr.f1bMQykAvuVoTUtCcODhcj6MYCPqi92FM9VjiNQ'),
(67, '', '', '', '$2y$10$MpdMD2O0hi7YQwqcIbftNuDSJQt6duAeiqzcUF/vRJD'),
(103, 'Gustavo', 'carlagustavolpp@gmail.com', 'Gu010203@', '$2y$10$Of80T5zVlFFid47AKKY26uCfrWXqSvUMGt5G0UOZI/b'),
(105, 'Carol', 'carol@teste.com', 'Gu010203@', '$2y$10$2rLiZDoiKD5CYpLSaXGEGecrt2oq.pwLJlP84veZMH0'),
(107, 'Carol', 'a', 'a', '$2y$10$9uCsOAZG8iA2LUJzWEveHOeuQjJHYTiRzjvKf8Yr3EA'),
(120, 'carol', 'caroltesteste@gmail.com', 'Gu010203@', '$2y$10$zaCeuOXxt7iBe6QYd/O8WOGORYuVl/f2OSFlEdu0IGq'),
(128, 'carol', 'teste@teste.com', 'Gu010203@', '$2y$10$SeMpokuPFI81/9szaYyIsOEt9kEoyuZaMmA2nKzgJjj'),
(131, 'Carol', 'caroltoledo@gmail.com', 'Gu010203@', '$2y$10$7kIp7npemBPHVJB50hMKdOnczRq2uVpQ97d6BB2tC3S'),
(133, 'Carol', 'caroltoledo1@gmail.com', 'Gu010203@', '$2y$10$5jKtGgaidfRkhvG.OiCNxObqGiuGxjFLiHMHkWDxnhN'),
(137, 'ff', 'ff', 'Gu', '$2y$10$EzOcwza0.msz/yltHJI33eCTP3gXaHpA.WtC8XV82Q4'),
(167, '', 'gustavolppgmail.com', '', '$2y$10$Q9LwpVPHaUXRkA61xIiTweVWIEYqLGUMb9Bs9Ar/uxZ'),
(168, '', 'gustavolpp1gmail.com', '', '$2y$10$087dYT7HzNq/Qm1B0qKxhesBcvJNuJPubvIdCfDpA.j'),
(169, 'Carol', 'teste@email.com', 'teste', '$2y$10$YPm0UD6MzPO6jb5uCSeKsOMoeoni5z./kpfMgsPTpHg'),
(173, 'Gustavo', 'teste@teste.com.br', '', '$2y$10$kwwy6EtWhGx01lClakkcuOHsJCQjzH2Z5rG0GSOxuq/'),
(183, '', '1', '1', '$2y$10$Rrp.OCEg1sAeK02t2A8KIOgY1QsAc4WWfIafgJJYrha'),
(247, 'Carol', 'carol.gmail.com', 'a', '$2y$10$TVBsMQDBXeyCsXzGTPuUpOyLdRMtYolTvAPGmnKeoPD'),
(248, 'Carol', 'teste@email.com.br', 'Gu010203@12', '$2y$10$TuaZddsBDs8QawoSlCrdcOC.wMuDOpX6gZc4z1hsh0/'),
(250, 'Carol', 'carol@teste.com.br', 'Gu010203@12', '$2y$10$WsEkIu/onxEQPHTJ6xFwmug4H6Dvh1R0Z9j7DCE2IpK'),
(251, 'Carol2', 'ca@rolteste2.com.br', 'Gu010203@12', '$2y$10$akIl5FaAwocWMuc849FHluXVWwDJDHk7aFLcbHAhZbj'),
(252, 'Carol', 'a@com.br', 'Gu010203@12', '$2y$10$8FOM/oEGtFqFgPXjW/LPZuje/8gVjdnWFdxdXzANtUV'),
(254, 'Gustavo', 'gustav1545olpp@gmail.com', 'Gu010203@12', '$2y$10$pu84njiLp0cQxMZ/wegFH.INsdqpf0nT7kaUmXGLY97'),
(256, 'Carol', 'carol@gmail.com', 'Gu010203@12', '$2y$10$coIpfDsKOMfkfaZ2tNYLi.M9gqURVhrpzc46lji/KWC'),
(257, 'Gustavo', 'gu4444stavolpp@gmail.com', 'Gu010203@12', '$2y$10$TSNngUHHKoIHbfNY3bPSfOfEEwhXoTNvyk2SvGE8kEC'),
(258, 'Carol', 'caro4444l@teste.com.br', 'Gu010203@12', '$2y$10$TF8GTIrd9jYWzlVaiO2Eweph4dK/FGHbIfBK/tGbcL8'),
(262, 'Gustavo', 'gu4444444stavolpp@gmail.com', 'Gu010203@12', '$2y$10$Rakyriac6U2dUf8EURDGzuDhnPmjRvai9KK5yH0YCTd'),
(263, 'Gustavo', '1@com.br', 'gU010203@12', '$2y$10$uwIACw8N3Dlodlydmh3nr.fz2.BRwvKdkye03tUKq9l'),
(264, 'Gustavo', 'gust48788avolpp@gmail.com', 'Gu010203@1234', '$2y$10$vTE57UzMCTRWTDDZbVipwOyzwY02ULdNTrAwq7IAhpu'),
(266, 'Leandra', 'leandrapp@gmail.com', 'Gu010203@12', '$2y$10$b7IPcEfO3yCojRRNBxKhNeLy1I4J0VD5deTRseogxCE'),
(267, 'Carlos Sitolino', 'carlos@gmail.com', 'Gu010203@12', '$2y$10$DlCC1fYOwkZ4O9ROFAeUj.vfCpnAxoDCWn79H9MCGVm'),
(268, 'Gustavo', 'gustavo@emil.com', 'Gu010203@123', '$2y$10$hC4a/u0uKx5F09.xsswCNOSB4XVsORfn3btXqW4zZn.'),
(269, 'teste', 'test444e@gmail.com', 'Gu010203@12', '$2y$10$2DwQ6ZePQ39u8BvX.zavPub2JTAEUEoh3aw95gjFUl5'),
(270, 'teste2', 'teste2@email.com', 'Gu010203@12', '$2y$10$qQik8wH1NZe.rHdNLQnWa.xkVgJEPjb9un6O2Se3BRa'),
(271, 'teste3', 'teste3@email.com', 'Gu010203@12', '$2y$10$7ggC/pssFJVf2Bf9pPsXfuRrTnZbn4/l2jMzytXTwe5'),
(272, 'teste4', 'teste4@email.com', 'Gu010203@12', '$2y$10$4Ri/YHTU5IpsAfFPYWPaG.q05DNBcf71Kjx3g99brEC'),
(273, 'teste5', 'teste5@email.com', 'Gu010203@12', '$2y$10$gHX1.fMgEfZEV2u5lBRpCeRNqdek/XoS7Gk05/knV0G'),
(274, 'teste6', 'teste6@email.com', 'Gu010203@12', '$2y$10$e2EOkfnEILAhigXjXElZIubhx8DpYLM3G/dINeBzltK'),
(275, 'teste7', 'teste7@email.com', 'Gu010203@12', '$2y$10$W6vg9GhKG.9tI2CjlXDI.O0IwQi0uqsXCPMndGiji1t'),
(276, 'Gustavo', 'gabriel@com.br', 'Gu010203@12', '$2y$10$4U7MlX8p1unvQ8/Tg807RelRH9NdqVjgacbjtNVW7XV'),
(277, 'teste do dia', 'gustavolppdodia@gmail.com', 'Gu010203@123', '$2y$10$gRZxvXOKJc/uJIlpuIimY.DjicdQ61/h9vKr7QxZjC3'),
(278, 'hash senha', 'hashsenha@email.com', 'Gu010203@12', '$2y$10$lCQcKEtnJ8drx6V94EthpumdlUYu4AZ/z2cPiWV53Zs7ttNxTr3CO'),
(279, 'hash senha', 'hashsenha1@email.com', 'Gu010203@12', '$2y$10$Ec.JaQ5RK7ENUpxBODKPz.u6aRqh4nrNLto0p62MJhxcR0M9zXH3q'),
(280, 'Gustavo', 'teste@tesaste.com.br', 'Gu01020@', '$2y$10$EXu9VtWsp3XyGANCSH3ZFeu8n0IcPa31.Zz637ZZyKaPbcZVj9B1G'),
(281, 'Gustavo', 'teste@tesa44ste.com.br', 'Gu01020@', '$2y$10$y.Gs.ZDnOgDVrWuZNMKAU.moboOHT.0GTUdp43/6PaPWzrKpuzyo6'),
(282, 'Gustavo', 'test444e@tesa44ste.com.br', 'cArol@12', '$2y$10$JCA4Y3VxW5Rr1ABeSs9qtuc.0905mQiMHArASPix2hDisvTsm6BKC'),
(283, 'Gustavo', 'gustavolpp@1gmail.com1', 'Gu010203@12', '$2y$10$5FEDZXux/TxpwW2iHDLsw.pD/vHGCIT4Wa0nYAE2LGGh3e4DA/Tk2'),
(284, 'Gustavo', 'gustavolpp@1gmail.com2', 'Gu01020@', '$2y$10$xQXNfcuNoTnKIgL8Yb6dauszBJ2cIl80C7smz7kxOsRCc8nmBKu46'),
(285, 'Gustavo', 'gdddddustavolpp@gmail.com', 'Gu01020@', '$2y$10$gTYxYE7l0dZ6nG58Cd6BrOoy3LaK88VdIfa3/KVBR9sYLmShL3LNu'),
(291, 'Atividade Final', 'atividadefinal@email.com', 'Gu01020@', '$2y$10$fTZ/YLGx1kDsxA.EIQB9fOeAk6X2bJTYPhYFhDPnPUMjTtCOdNSs2'),
(299, 'Gustavo', '122@com.br', 'Gu01020@', '$2y$10$RGqW3PIyExPuWTbClhBEOuGFD99fusVtJZHBt8ANDtXl6.DdFf87O'),
(301, 'Gustavo', 'gusefrgergertavolpp@gmail.com', 'Gu01020@', '$2y$10$s4jFd6ulJklyFktvSM9bBe63V6JwlLTlIQhqzjF1s1yBhExj5NnVm'),
(307, 'Carol', 'carol@teste44.com.br', 'Gu01020@', '$2y$10$rJgM3gV1.Q8WPufP1VFLtu4qV/wIxuHRzrwqG53iGIJHCKNZp1ZhG'),
(308, 'Gustavo', 'g44444ustavolpp@gmail.com', 'Gu01020@', '$2y$10$.Dso621lAqP3ezaI7t/XeeOCsMV4ERfzg1reqqx..qcfZhHaBHrs2'),
(309, 'Gustavo', 'g444444ustavolpp@gmail.com', 'Gu01020@', '$2y$10$QKT8wgnMH7ptZJtvIc.wdO6.73gB/wt.8Og97MrBXD1J/oZ9cegAK'),
(310, 'Gustavo', 'gu444444stavolpp@gmail.com', 'Gu01020@', '$2y$10$7vRpWNPnrP4lwfEHR2ttmev7KIgNTlTpu.oHPijb7IQYhVjyIn4Pu'),
(311, 'Gustavo', 'gus455555tavolpp@gmail.com', 'Gu01020@', '$2y$10$fhSzztkkYMGDQf7QH.u35OJAMe/f2uQZBTORhe8swdFvF81OtUHD6'),
(312, 'Gustavo', '1145541@com.br', 'Gu01020@', '$2y$10$qNAKix3q92uK9OfANsDkKeSVEQe89fBjfwKhJSk5wBGd.dLXHy8AK'),
(318, 'Gustavo Leite Maldonado', 'gustavolpp@gmail.com', 'Gu01020@', '$2y$10$sCoT5GoSUFv8rRpkVZGPdeILxO6ZQ2uluo0Yo4Sj0oQs4G11N30ka'),
(322, 'Carol Ultimo Teste', 'ultimoteste@gmail.com', 'Carol@12', '$2y$10$s.sgnMsYgahVySZO2R4znOQX4LeEsD83IYzzYHeZTSCCIhCcCBp0m');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
