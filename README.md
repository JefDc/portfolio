# Portfolio
Free and open source project Symfony 4.
Dynamic portfolio website, fully administrable and customizable without any lines of code.
Regularly updated.


# Install
- In terminal : 
   - git clone https://github.com/JefDc/portfolio.git .  Install git : https://git-scm.com/book/en/v2/Getting-Started-Installing-Git .
   - composer install . Install composer : https://getcomposer.org/download/
- Install data base exemple in terminal :
   - `php bin/console app:load-fixtures-dev`
   
   
# V1.0
  # User page :
    - Add section intro.
    - Add section aboutUs.
    - Add section portfolio.
    - Add section compétences.
    - Add section soft kills.
    - Add section contact.
    - Add section footer.
   
  # Admin :
    - Add section dashboard :
      - navbar
      - sidebar
      - Showing new messages :
        - delete message
      
    - Add section intro :
      - index :
        - name
        - title
        - subTitle
        - picture
      - form edit
      
    - Add section a propos :
      - index :
        - subTitle
        - title
        - text
        - CV
      - form edit
      
    - Add section portfolio :
      - table index :
        - picture
        - link
        - title
        - subTitle
        - delete
        - add new
      - form edit
      
    - Add section Competence :
      - table index :
        - picture
        - title
        - delete
        - add new
      - form edit
      
    - Add section soft skill :
      - table index :
        - picture
        - title
        - text
        - delete
        - add new
      - form edit
      
    - Add section Contact :
      - index :
       - phone
       - email
       - address
       - title
       - subTitle
       - text
       - picture
     - form edit
     
    - Add section extra :
      - index :
        - title section competences
        - title section soft skill
        - subTitle section soft skill
        - text section soft skill
        - gitHub link footer
        - linkedin link footer
        - twitter link footer
      - form edit
    
# v1.1
  Fix bug
  
# v1.2
  # User page :
    - Add reCaptcha in form contact
    
  # Admin :
    - Add function mailSendAdmin
    - Add function mailSendUser
    - Add template mailSendUser
    
# v1.2.1    
    Fix bug
    
# v1.3
  # User page :
    - modify soft skill on mes passions in navbar
    
  # Admin :
    - section extra :
      - add mailSetting :
        - host
        - port
        - encryptage
        - username
        - password
        - form edit
      - add mailSettingUser :
        - subject
        - sendMail
        - domaine
        - receptionMail
        - name Admin
        - form edit
      - add mailSettingAdmin :
        - subject
        - sendMail
        - domaine
        - form edit
      - add mailContentUser :
        - title
        - text
        - picture
        - site link
        - form edit
      - add mailContentAdmin :
        - title
        - form edit
    - add template mailSendAdmin
    - Modify template mailSendUser (add dinamyque view)
