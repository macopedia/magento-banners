Please follow these instructions to proceed with the installation of your extension:

### #1 Installation:

1. Copy all files into your magento directory and turn Magento cache off. 
1. Please note the this install assumes you are using the RWD theme. Please note the actual location of your module.
1. Navigate to System > Configuration > Wagento > Banner Slider. 
1. Configure Banner settings according to your needs.
### #2 System Configuration

- Banner Loop - enable or disable to continue banner loop.
- Slide Speed – Specify banner slider speed to rotate.
- Enable - enable or disable banner module.
- Enable JQuery - enable or disable to include jquery library.
- Pause OnHover – enable or disable to slider pause when mouse over on banner. 
- Controls - enable or disable to include prev or next buttons.
- Description – To show banner description.
- Pagination – enable or disable to show pagination in banner.
### #3 Create or Edit banner:

1. Navigate CMS >> Banner slider.
1. Create banner slider by click on Add New Item and fill neccessary data
1. To Edit Banner Click on banner in Banner Grid.
1. You can change banner status by using Change status in Massaction in Banner Grid report.

### #4 View banner :

Navigate CMS >> Pages >> Home page .

Add Below code on home page content to call banner :

{{block type="responsivebannerslider/index" name="responsivebannerslider_index" template="responsivebannerslider/index.phtml"}}
