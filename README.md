# gravity-pdf-templates
FREE PDF templates to use with Gravity PDF in Wordpress Gravity Forms.

### History
When I was working for Registeration Letter / Data Sheet PDFs to be stored and emailed to users on my Wordpress Project,

I couldn't find FREE Gravity PDF Templates so I made some and provided them to you on GitHub.

You can save 20$ by using these Templates

## Getting Started
These instructions will get you a copy of the project / Templates (specifically) with the gravity form used in examples to test and later on develop the templates on your localmachine or live wordpress site.

### Prerequisites

Things you need to le able to install these Templates and Google for How to install them ?


[Wordpress](https://wordpress.og) -My Favourite CMS | Place where Gravity Forms is to be used

[Gravity Forms for Wordpress](http://www.gravityforms.com) -Premium Plugin Buy from Link

[Gravity PDF](https://gravitypdf.com) -Free Addon for Gravity Forms


### Installing

```
1-Just go to : wp-Admin >> Gravity Forms >> Import / Export >> Import Forms.
2-Choose File >> Gravity-Forms.JSON (File in Github Import Folder)
3-Click [Import] & Done
```

Now use the form and add an entry to it so that we can generate PDFs.

Befor Generation of PDFs, we need to configure PDF Templates in Gravity PDF.

For configuration of pdf templates use the following method.
```
1-Copy 'PHP files' from git repository and 'images' folder to 'Wordpress/wp-content/uploads/PDF_EXTENDED_TEMPLATES/' (Here)
2-Then go to : wp-Admin >> Gravity Forms >> Forms >> Student / Resident Registration (Select any Form for which you would like to use PDF).
3-Click : Settings >> PDF >> Student 
(Add New if you want to but if you imported .JSON file you need not to create a new pdf and set it. Its already set and being used from 'PDF_EXTENDED_TEMPLATES')
4-Choose pdf template from Template dropdown or click Advanced to open advanced menu.
5-In Advanced menu you can upload Templates by uploading single ZIP package of  [PHP files and 'images' folder]

```

Now you are ready to test download a PDF
## Download the PDFs

Go to Form Entries and select any entry or click on 'view pdf' to download pdf.
Check the PDF. It is superb & elegant .
### Customizing Templates

You can customize templates to handle data from your own cutom form.
Just check PHP Array by visiting form entry's pdf download link and adding /?data=1 in front of it.

My download link is:
```
localhost/wp/pdf/5922ebc91f8c9/6/
```
So my PHP Array can be viewed by adding '?data=1'
```
localhost/wp/pdf/5922ebc91f8c9/6/?data=1
```
Just open any pdf template and add your custom CSS styles to style the PDF content.

Change PDF data by changing $form_data[ ] array in php. 
Remember $form_data[ ] will hold form data as shown in ?data=1 example.

You cand change $form_data[field][field key] as required and used in ?data=1 of your Form to show your Form field's values

## Built With

* [BRACKETS](http://www.brackets.io/) - The Best Code Editor in Web & World (Ranked by ME - the Author)

## Authors

* **Fahad Yousaf Mahar** - *Whole Work* - [WebIT.pk](https://webit.pk)

See also the list of [contributors](https://github.com/FahadYousafMahar/gravity-pdf-templates/graphs/contributors) who participated in this project.

## License

This project is licensed under the GNU GPLv3 License - see the [LICENSE](LICENSE) file for details

## Acknowledgments

* Gravity PDF Documentation
* Keyboard
* Brackets []
