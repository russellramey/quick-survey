## Overview
Multi step survey/feedback form. Uses radio and checkbox buttons to gather survey type feedback or basic customer infomation to self identify services or proudcts needed. Simply add your questions to the markup, add resposes to 'data' atrributes (optional).

## How to use

1) Include dependencies (jQuery & jQuery Validate).
```html
<script src="path/to/cdn/or/local/jquery"></script>
<script src="path/to/jquery.validate.min.js"></script>
```

2) Include `quick.survey.js`.
```html
<script src="path/to/quick.survey.js"></script>
```

3) Creat your markup...

## Markup
 
1) Create a `form` element.
```html
<form action="path/to/action" method="post">
	<!-- Form parts will go here -->
</form>
```

2) Create `form-part`s in your `form`. Use as many `form-part`s as needed.
```html
<div id="p1" class="form-part">
	<!-- Form fields will go here -->
</div>
```

3) Add your questions, add `form-field--question` to the parent element. Make sure to add a unique `id` to the parent element, this will be used to generate the unquie `name` attribute of the rendered `input`. Use as many `form-field--question`s as needed for you use case in each `form-part`.
```html
<div id="q1" class="form-field--question">
	<p>This is an example survey question with an aboslute answer, three options and required?</p>
</div>
```

## Question Types
By default you can set up simple yes, no, unsure questions by just using Step 3 above. Create an element, give it a class of `form-field--question`. Thes questions use `radio` inputs - only one answer allowed.
```html
<div id="q1" class="form-field--question">
	<p>This is an example survey question with an aboslute answer, three options and required?</p>
</div>
```

You can also have a question with multiple answers available to the user (check all that apply type of question). Use class of `form-field--question-multi`, then add a `data-option attribute`. Add your desired options to the `data-option` attribute separated by a comma. These questions use `checkbox` inputs to allow multiple answers.
```html
<div id="q1" class="form-field form-field--question-multi" data-option="Option one, Option two, Option three">
	<p>This is an example question that will allow multiple answers, as checkboxes?</p>
</div>
```

## Form navigation
Set up the form navigation (next, back, submit). The `submit` input will automatically show up on the last `form-part` detected.
```html
<div class="form-navigation">
	<!-- Go Back -->
    <a href="#" class="previous">Go back</a>
    <!-- Next Section -->
    <a href="#" class="next button">Continue</a>
    <!-- Submit -->
    <input type="submit" class="button" id="submit" name="submit" value="Submit for review">
</div>
```

## Form submission
I didn't set up a default form action, you can do what you will with the data that fits your use case. Simply set up your form action in language of choice, and add it to the form action.

## Demo
See the basic functionality [here](http://russellramey.me/examples/quick-survey).





