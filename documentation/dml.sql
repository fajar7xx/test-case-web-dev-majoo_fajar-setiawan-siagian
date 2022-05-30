SELECT
	*
FROM
	products;

INSERT
	INTO
	products (name,
	price,
	description,
	category_id,
	image)
VALUES
('Majoo pro',
2750000,
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus gravida, porta massa sit amet, venenatis odio. Aliquam ullamcorper maximus ante, tempus cursus lacus placerat nec. Duis diam tellus, scelerisque id euismod varius, varius eget lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec id elit dolor. Morbi a elit gravida, condimentum nibh efficitur, suscipit ligula. Cras sagittis felis vitae justo hendrerit, sed varius nulla interdum. Quisque lobortis, est id porttitor bibendum, enim magna congue augue, vitae sagittis justo nulla a lorem.',
1,
'image.jpg'),
('Majoo Advance',
2750000,
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus gravida, porta massa sit amet, venenatis odio. Aliquam ullamcorper maximus ante, tempus cursus lacus placerat nec. Duis diam tellus, scelerisque id euismod varius, varius eget lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec id elit dolor. Morbi a elit gravida, condimentum nibh efficitur, suscipit ligula. Cras sagittis felis vitae justo hendrerit, sed varius nulla interdum. Quisque lobortis, est id porttitor bibendum, enim magna congue augue, vitae sagittis justo nulla a lorem.',
1,
'image.jpg'),
('Majoo Lifestyle',
2750000,
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus gravida, porta massa sit amet, venenatis odio. Aliquam ullamcorper maximus ante, tempus cursus lacus placerat nec. Duis diam tellus, scelerisque id euismod varius, varius eget lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec id elit dolor. Morbi a elit gravida, condimentum nibh efficitur, suscipit ligula. Cras sagittis felis vitae justo hendrerit, sed varius nulla interdum. Quisque lobortis, est id porttitor bibendum, enim magna congue augue, vitae sagittis justo nulla a lorem.',
1,
'image.jpg'),
('Majoo Desktop',
2750000,
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus gravida, porta massa sit amet, venenatis odio. Aliquam ullamcorper maximus ante, tempus cursus lacus placerat nec. Duis diam tellus, scelerisque id euismod varius, varius eget lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec id elit dolor. Morbi a elit gravida, condimentum nibh efficitur, suscipit ligula. Cras sagittis felis vitae justo hendrerit, sed varius nulla interdum. Quisque lobortis, est id porttitor bibendum, enim magna congue augue, vitae sagittis justo nulla a lorem.',
1,
'image.jpg');

UPDATE
	products
SET
	name = 'Majoo Pro',
	price = 3000000,
	description = 'Duis condimentum eu nisi a auctor. Nullam in purus eu velit sagittis efficitur ac non ipsum. In hac habitasse platea dictumst. Sed venenatis lectus iaculis ligula volutpat bibendum. Integer bibendum metus viverra sem condimentum rutrum. Sed eu dapibus magna, ac elementum urna. Praesent varius bibendum pellentesque. Nam eget purus semper, iaculis ex id, tempor felis. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
	category_id = 2,
	image = 'image-product.jpeg'
WHERE
	id = 1;


DELETE
FROM
	products
WHERE
	id = 1


SELECT
	*
FROM
	categories;

INSERT
	INTO
	categories(name)
VALUES('buku'),
('dapur'),
('elektronik'),
('komputer'),
('buku');

UPDATE
	categories
SET
	name = 'Gadget'
WHERE
	id = 3;

DELETE
	categories
WHERE
	id = 5;
