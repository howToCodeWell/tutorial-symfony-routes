# tutorial-symfony-routes
Tutorials on Symfony routing

- [Tutorial 1](./tutorials/tutorial_1/README.md): [How to create a standard Symfony route](https://howtocodewell.net)
- [Tutorial 2](./tutorials/tutorial_2/README.md): [How to pass a parameter to a Symfony route](https://howtocodewell.net)
- [Tutorial 3](./tutorials/tutorial_3/README.md): [Symfony route parameter requirements](https://howtocodewell.net)
- [Tutorial 4](./tutorials/tutorial_4/README.md): [Optional Symfony route parameters](https://howtocodewell.net)
- [Tutorial 5](./tutorials/tutorial_5/README.md): [Symfony route name collisions](https://howtocodewell.net)
- [Tutorial 6](./tutorials/tutorial_6/README.md): [Symfony route methods](https://howtocodewell.net)
- [Tutorial 7](./tutorials/tutorial_7/README.md): [Symfony controller route group](https://howtocodewell.net)

## How to create a new tutorial
From the project root
```bash
symfony new tutorials/tutorial_x --no-git     
```

Install the the `symfony/maker-bundle`
```bash
cd tutorials/tutorial_x
composer require --dev symfony/maker-bundle  
```

- [ ] Add a link to the top of this page to the tutorials README.md