DROP DATABASE IF EXISTS fdj;

CREATE DATABASE fdj; 
USE fdj;

CREATE TABLE plateforme(
	id_plateforme INT (5),
    nom_plateforme VARCHAR(25),
	PRIMARY KEY (id_plateforme)
);

CREATE TABLE createur(
	id_crea INT (5),
    nom_crea VARCHAR(25),
	PRIMARY KEY (id_crea)
);

CREATE TABLE genre (
	id_genre INT(5),
	nom_genre VARCHAR(50),
	PRIMARY KEY (id_genre)
);

CREATE TABLE jeux (
	id_jeux INT(5),
	nom_jeux VARCHAR(50),
    id_plateforme INT(5),
    id_genre INT(5),
    id_crea INT(5),
    
    FOREIGN KEY (id_crea) REFERENCES createur (id_crea),
    FOREIGN KEY (id_plateforme) REFERENCES plateforme (id_plateforme),
    FOREIGN KEY (id_genre) REFERENCES genre (id_genre),
	PRIMARY KEY (id_jeux)
);

INSERT INTO plateforme (id_plateforme, nom_plateforme) VALUES
(1, 'PC'),
(2, 'PS5'),
(3, 'PS4'),
(4, 'XBOX One'),
(5, 'XBOX Series X'),
(6, 'SWITCH'),
(7, 'SMARTPHONE'),
(8, 'PC PS4 XBOX One'),
(9, 'PC PS5 XBOX Series X'),
(10, 'PC SWITCH SMARTPHONE'),
(11, 'PC PS4'),
(12, 'PC SMARTPHONE'),
(13, 'SWITCH PS5 XBOX ')

INSERT INTO createur (id_crea, nom_crea) VALUES
(1, 'Bandaï Nemco'), 
(2, 'Electronic Arts'),
(3, 'Nintendo'),
(4, 'Ubisoft'),
(5, 'Sony Interactive Entertainment'),
(6, 'Activision Blizzard'),
(7, 'Epic Games - Riot Games'),
(8, 'Gameloft'),
(9, 'Square Enix'),
(10, 'ZeroGamesStudios')

INSERT INTO genre (id_genre, nom_genre) VALUES
(1, 'Les jeux de plateforme'),
(2, 'FPS'),
(3, 'RPG'),
(4, 'MMORPG'),
(5, 'MOBA'),
(6, 'Jeux horreurs'),
(7, 'Hack n slash'),
(8, 'RTS'),
(9, 'Courses'),
(10, 'Simulation'),
(11, 'Combat'),
(12, 'Sport'),
(13, 'Aventure')


INSERT INTO jeux (id_jeux, nom_jeux, id_plateforme, id_genre, id_crea) VALUES
(1, 'Synduality', '1', '5', '1'),
(2, 'Armored Core VI Fires of Rubicon', '1', '2', '1'),
(3, 'DC Justice League Chaos Cosmique', '12', '11', '1'),
(4, 'DreamWorks dragons Legendes des neuf Royaumes', '12', '11', '1'),
(5, 'Elden Ring', '7', '5', '1'),
(6, 'Cyberpunk 2077', '7', '5', '1'),
(7, 'One Piece Odyssey', '7', '5', '1'),
(8, 'Dragon Ball the breakers', '7', '5', '1'),
(9, 'Digimon Survive', '7', '5', '1'),
(10, 'Peppa Pig aventures autour du monde', '7', '5', '1'),

(11, 'FIFA23', '9', '12','2'),
(12, 'APEX', '9', '2', '2'),
(13, 'F1 22', '9', '9','2'),
(14, 'Battlefield 2042', '9', '2','2'),
(15, 'NFS Unbound', '9', '9','2'),
(16, 'MADDEN 23', '9', '12','2'),
(17, 'Grid Legend', '9', '9','2'),
(18, 'NHL 22', '9', '12','2'),
(19, 'Medal Of Honor', '9', '2','2'),
(20, 'It Takes To', '9', '1','2'),

(21, 'Splatoon 3', '6', '2', '3'),
(22, 'The Legend of Zelda : Tears of the Kingdom', '6', '13', '3'),
(23, 'Kirbys s Return to Dream Land Deluxe', '6', '1', '3'),
(24, 'Animal Crossing: New Horizons', '6', '10', '3'),
(25, 'Mario Kart 8 Deluxe', '6', '9', '3'),
(26, 'Pokémon Violet', '6', '13', '3'),
(27, 'Super Smash Bros. Ultimate', '6', '11', '3'),
(28, 'Star Wars Hunters', '6', '12', '3'),
(29, 'Front mission 2 Remake', '6', '12', '3'),
(30, 'Minecraft Legends', '6', '12', '3'),

(31, 'Skull and Bones', '6', '2','4'),
(32, 'Assasin s Creed Mirage', '6', '2','4'),
(33, 'Rocksmith+', '6', '2','4'),
(34, 'The Division Resurgence', '6', '2','4'),
(35, 'Brawlhalla', '6', '2','4'),
(36, 'For Honor', '6', '2','4'),
(37, 'Mario + The Lapins Crétins Sparks of Hope', '6', '2','4'),
(38, 'Just Dance 2023', '6', '2','4'),
(39, 'Anno 1800', '6', '2','4'),
(40, 'Avatar Frontiers of Pandora', '6', '2','4'),

(41, 'Horizon Forbidden West: Burning Shores', '6', '2','5'),
(42, 'God of War Ragnarök', '6', '2','5'),
(43, 'Uncharted : Legacy of Thieves Collection', '6', '2','5'),
(44, 'Ratchet & Clank Rift Apart', '6', '2','5'),
(45, 'Stray', '6', '2','5'),
(46, 'MLB The Show 2022', '6', '2','5'),
(47, 'Gran Turismo 7', '6', '2','5'),
(48, 'Sackboy: A Big Adventure', '6', '2','5'),
(49, 'Death Stranding', '6', '2','5'),
(50, 'Horizon Call of the Mountain', '6', '2','5'),

(51, 'Diablo IV', '6', '2','6'),
(52, 'Crash Team Rumble', '6', '2','6'),
(53, 'Call Of Duty Warzone 2.0', '6', '2','6'),
(54, 'Overwatch 2', '6', '2','6'),
(55, 'Call of Duty Modern Warfare 2', '6', '2','6'),
(56, 'Call of Duty Vanguard', '6', '2','6'),
(57, 'World of Warcraft Classic', '6', '2','6'),
(58, 'Destiny 2: La Reine Sorcière', '6', '2','6'),
(59, 'Overwatch 2', '6', '2','6'),
(60, 'Diablo Immortal', '6', '2','6'),

(61, 'Fortnite', '6', '2','7'),
(62, 'Unreal Engine', '6', '2','7'),
(63, 'Rocket League', '6', '2','7'),
(64, 'Grand Theft Auto V', '6', '2','7'),
(65, 'Genshin Impact', '6', '2','7'),
(66, 'Valorant', '6', '2','7'),
(67, 'Hogwarts Legacy', '6', '2','7'),
(68, 'Goat simulator 3', '6', '2','7'),
(69, 'Dead by Daylight', '6', '2','7'),
(70, 'League of legends', '6', '2','7'),


(71, 'Asphalt 9 Legends', '6', '2','8'),
(72, 'Disney Magic Kingdoms', '6', '2','8'),
(73, 'March Of Empires', '6', '2','8'),
(74, 'Dragon Mania Legends', '6', '2','8'),
(75, 'Gangstar Vegas', '6', '2','8'),
(76, 'Ice Age Village', '6', '2','8'),
(77, 'Modern Combat Versus', '6', '2','8'),
(78, 'Blitz Brigade', '6', '2','8'),
(79, 'World at Arms', '6', '2','8'),
(80, 'Dungeon Hunter 5', '6', '2','8'),

(81, 'FORSPOKEN', '6', '2','9'),
(82, 'THEATRHYTHM FINAL BAR LINE', '6', '2','9'),
(83, 'Octopath Traveller II', '6', '2','9'),
(84, 'FINAL FANTASY XVI', '6', '2','9'),
(85, 'Chocobo GP', '6', '2','9'),
(86, 'DRAGON QUEST TACT', '6', '2','9'),
(87, 'KINGDOM HEARTS Missing-Link', '6', '2','9'),
(88, 'Little Goody Two Shoes', '6', '2','9'),
(89, 'Circuit Superstars', '6', '2','9'),
(90, 'The Diofield Chronicle', '6', '2','9'),

(91, 'Super World War', '6', '2','10'),
(92, 'Planet Go', '6', '2','10'),
(93, 'Fernbus Coach Simulator', '6', '2','10'),
(94, 'Hot Lap Racing', '6', '2','10'),
(95, 'Hell Diggers (The Sandbox)', '6', '2','10'),
(96, 'Roots Of Tomorrow', '6', '2','10'),
(97, 'Dogami', '6', '2','10'),
(98, 'PowerZ', '6', '2','10'),
(99, 'Linelight', '6', '2','10'),
(100, 'Out Of Line', '6', '2','10')