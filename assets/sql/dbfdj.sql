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
    nom_crea VARCHAR(50),
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
	picture_jeux VARCHAR(100),
	PRIMARY KEY (id_jeux),
    FOREIGN KEY (id_crea) REFERENCES createur (id_crea),
    FOREIGN KEY (id_plateforme) REFERENCES plateforme (id_plateforme),
    FOREIGN KEY (id_genre) REFERENCES genre (id_genre)
);


INSERT INTO plateforme (id_plateforme, nom_plateforme) VALUES
(1, 'PC'),
(2, 'PS5'),
(3, 'PS4'),
(4, 'XBOX One'),
(5, 'XBOX Series X'),
(6, 'SWITCH'),
(7, 'SMARTPHONE');

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
(10, 'ZeroGamesStudios');

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
(13, 'Aventure');

INSERT INTO jeux (id_jeux, nom_jeux, id_plateforme, id_genre, id_crea, picture_jeux) VALUES
(1, 'Synduality', '1', '5', '1', 'synduality.jpeg'),
(2, 'Armored Core VI Fires of Rubicon', '1', '2', '1', 'armored.jpeg'),
(3, 'DC Justice League Chaos Cosmique', '1', '13', '1', 'dc.jpeg'),
(4, 'DreamWorks dragons Legendes des neuf Royaumes', '2', '13', '1', 'dragon.jpeg'),
(5, 'Elden Ring', '7', '5', '1', 'elden.jpeg'),
(6, 'Cyberpunk 2077', '7', '5', '1', 'cyber.jpeg'),
(7, 'One Piece Odyssey', '7', '5', '1', 'oneP.jpeg'),
(8, 'Dragon Ball the breakers', '7', '5', '1','dragonB.jpeg'),
(9, 'Digimon Survive', '7', '5', '1', 'digimon.jpeg'),
(10, 'Peppa Pig aventures autour du monde', '7', '5', '1', 'peppa.jpeg'),

(11, 'FIFA23', '2', '12','2','fifa23.jpeg'),
(12, 'APEX', '1', '2', '2','apex.jpeg'),
(13, 'F1 22', '2', '9','2', 'fi22.jpeg'),
(14, 'Battlefield 2042', '2', '2','2', 'battlefield2042.jpeg'),
(15, 'NFS Unbound', '2', '9','2', 'nfs.jpeg'),
(16, 'MADDEN 23', '2', '12','2', 'madden23.jpeg'),
(17, 'Grid Legend', '2', '9','2', 'gridlegend.jpeg'),
(18, 'NHL 22', '2', '12','2', 'nhl22.jpeg'),
(19, 'Medal Of Honor', '1', '2','2', 'medalofhonor.jpeg'),
(20, 'It Takes To', '2', '1','2', 'ittakes.jpeg'),

(21, 'Splatoon 3', '6', '2', '3', 'splatoon3_image500w.jpg'),
(22, 'The Legend of Zelda : Tears of the Kingdom', '6', '13', '3', 'TheLegendOfZeldaTearsOfTheKingdom.jpg'),
(23, 'Kirbys s Return to Dream Land Deluxe', '6', '1', '3', 'KirbysReturnToDreamLandDeluxe.jpg'),
(24, 'Animal Crossing: New Horizons', '6', '10', '3', 'AnimalCrossingNewHorizons.jpg'),
(25, 'Mario Kart 8 Deluxe', '6', '9', '3', 'MarioKart8Deluxe.jpg'),
(26, 'Pokémon Violet', '6', '13', '3', 'PokemonScarletViolet_Violet.jpg'),
(27, 'Super Smash Bros. Ultimate', '6', '11', '3', 'SuperSmashBrosUltimate.jpg'),
(28, 'Star Wars Hunters', '6', '12', '3', 'StarWarsHunters.jpg'),
(29, 'Front mission 2 Remake', '6', '12', '3', 'FrontMission2Remake.jpg'),
(30, 'Minecraft Legends', '6', '12', '3', 'MinecraftLegends.jpg'),

(31, 'Skull and Bones', '2', '13','4', 'SkullandBones.jpeg'),
(32, 'Assasin s Creed Mirage', '2', '13','4', 'assasinscreed.jpeg'),
(33, 'Rocksmith+', '1', '10','4', 'rock.jpeg'),
(34, 'The Division Resurgence', '2', '2','4', 'divi.jpeg'),
(35, 'Brawlhalla', '1', '11','4', 'bra.jpeg'),
(36, 'For Honor', '2', '11','4', 'forh.jpeg'),
(37, 'Mario + The Lapins Crétins Sparks of Hope', '6', '13','4', 'mario.jpeg'),
(38, 'Just Dance 2023', '6', '12','4', 'just.jpeg'),
(39, 'Anno 1800', '1', '10','4', 'anno.jpeg'),
(40, 'Avatar Frontiers of Pandora', '2', '13','4', 'avatar.jpeg'),

(41, 'Horizon Forbidden West: Burning Shores', '2', '13','5', 'horizon.jpeg'),
(42, 'God of War Ragnarök', '2', '13','5','god.jpeg'),
(43, 'Uncharted : Legacy of Thieves Collection', '2', '13','5','unchar.jpeg'),
(44, 'Ratchet & Clank Rift Apart', '2', '1','5','ratchet.jpeg'),
(45, 'Stray', '2', '13','5','stray.jpeg'),
(46, 'MLB The Show 2022', '6', '12','5','theshow.jpeg'),
(47, 'Gran Turismo 7', '2', '9','5','gt7.jpeg'),
(48, 'Sackboy: A Big Adventure', '2', '1','5','sackb.jpeg'),
(49, 'Death Stranding', '2', '13','5','death.jpeg'),
(50, 'Horizon Call of the Mountain', '2', '13','5','horizoncall.jpeg'),

(51, 'Diablo IV', '1', '7','6','diablo.jpeg'),
(52, 'Crash Team Rumble', '2', '5','6','crash.jpeg'),
(53, 'Call Of Duty Warzone 2.0', '2', '2','6','callof.jpeg'),
(54, 'Overwatch 2', '2', '2','6','over.jpeg'),
(55, 'Call of Duty Modern Warfare 2', '2', '2','6','callofmo.jpeg'),
(56, 'Call of Duty Vanguard', '2', '2','6','callofvan.jpeg'),
(57, 'World of Warcraft Classic', '1', '4','6','warcraft.jpeg'),
(58, 'Destiny 2: La Reine Sorcière', '2', '4','6','sorciere.jpeg'),
(60, 'Diablo Immortal', '7', '4','6','diabloimmo.jpeg'),

(61, 'Fortnite', '1', '2','7','fornite.jpeg'),
(63, 'Rocket League', '2', '9','7','rocket.jpeg'),
(64, 'Grand Theft Auto V', '2', '10','7','gtav.jpeg'),
(65, 'Genshin Impact', '7', '3','7','genshin.jpeg'),
(66, 'Valorant', '1', '2','7','valorant.jpeg'),
(67, 'Hogwarts Legacy', '1','3','7','hog.jpeg'),
(68, 'Goat simulator 3', '2','10','7','goat.jpeg'),
(69, 'Dead by Daylight', '1','2','7','dead.jpeg'),
(70, 'League of legends', '1','5','7','leofle.jpeg'),

(71, 'Asphalt 9 Legends', '7', '9','8','asphalt.jpeg'),
(72, 'Disney Magic Kingdoms', '7','10','8','disney.jpeg'),
(73, 'March Of Empires', '7', '4','8','march.jpeg'),
(74, 'Dragon Mania Legends', '7', '10','8','dragon.jpeg'),
(75, 'Gangstar Vegas', '7', '13','8','gangsta.jpeg'),
(76, 'Ice Age Village', '7', '1','8','ice.jpeg'),
(77, 'Modern Combat Versus', '7', '2','8','modern*.jpeg'),
(78, 'Blitz Brigade', '7', '2','8','blitz.jpeg'),
(79, 'World at Arms', '7', '7','8','worls.jpeg'),
(80, 'Dungeon Hunter 5', '7', '11','8','dungeon.jpeg'),

(81, 'FORSPOKEN', '1', '3','9','forspoken.jpeg'),
(82, 'THEATRHYTHM FINAL BAR LINE', '6', '13','9','theatr.jpeg'),
(83, 'Octopath Traveller II','6', '13','9','octo.jpeg'),
(84, 'FINAL FANTASY XVI', '2', '3','9','final.jpeg'),
(85, 'Chocobo GP', '6', '9','9','choco.jpeg'),
(86, 'DRAGON QUEST TACT', '7', '3','9','dragonquest.jpeg'),
(87, 'KINGDOM HEARTS Missing-Link', '7', '3','9','king.jpeg'),
(88, 'Little Goody Two Shoes', '1', '10','9','little.jpeg'),
(89, 'Circuit Superstars', '6', '9','9','circuit.jpeg'),
(90, 'The Diofield Chronicle', '5', '13','9','diof.jpeg'),

(91, 'Super World War', '6', '11','10','super.jpeg'),
(92, 'Planet Go', '7', '10','10','planet.jpeg'),
(93, 'Fernbus Coach Simulator', '5', '10','10','bus.jpeg'),
(94, 'Hot Lap Racing', '6', '9','10','hot.jpeg'),
(95, 'Hell Diggers (The Sandbox)', '1', '7','10','hell.jpeg'),
(96, 'Roots Of Tomorrow', '1', '10','10','roots.jpeg'),
(97, 'Dogami', '1', '10','10','dog.jpeg'),
(98, 'PowerZ', '1', '13','10','powerz.jpeg'),
(99, 'Linelight', '6', '13','10','linelight.jpeg'),
(100, 'Out Of Line', '6', '13','10','out.jpeg');