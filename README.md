# Templatr


Templatr is a simple template engine for PHP, at the moment it's very simple and probably not the best method to abouts it. Hopefully this project will develop throughout my dissertation. 

## Use

### Creating the object

First create a new templatr object;

```
$templatr = new templatr("Template Directory", "Template Format", "Base Path");
```

### Rendering a page

To render a page we simply use the render() function

```
//We can render a template dependant on the current URI
$templatr->render()

//We can also render a specific page
$templatr->render('test');
```

### Passing variables to be ouputted

To pass parameters to a template simply assign a variable

```
$templatr->data = "Content";
//Then inside the template file
$this->data
```


##TODO

- Add in support for $_GET variables