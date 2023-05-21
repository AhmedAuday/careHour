class Patients{

  constructor(){
    this.id = ''
    this.first_name = ''
    this.middle_name = ''
    this.last_name = ''
    this.username = ''
    this.email = ''
    this.passwordd = ''
    this.image_of_id = ''
    this.profile_image = ''
    this.date_of_birth = ''
    this.blood_type = ''
    this.gender = ''
    this.addresses = ''
    this.city = ''
    this.phone_number = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/patients.php?id=' + this.id + '&first_name=' + this.first_name + '&middle_name=' + this.middle_name + '&last_name=' + this.last_name + '&username=' + this.username + '&email=' + this.email + '&passwordd=' + this.passwordd + '&image_of_id=' + this.image_of_id + '&profile_image=' + this.profile_image + '&date_of_birth=' + this.date_of_birth + '&blood_type=' + this.blood_type + '&gender=' + this.gender + '&addresses=' + this.addresses + '&city=' + this.city + '&phone_number=' + this.phone_number + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/patients.php?id=' + this.id + '&first_name=' + this.first_name + '&middle_name=' + this.middle_name + '&last_name=' + this.last_name + '&username=' + this.username + '&email=' + this.email + '&passwordd=' + this.passwordd + '&image_of_id=' + this.image_of_id + '&profile_image=' + this.profile_image + '&date_of_birth=' + this.date_of_birth + '&blood_type=' + this.blood_type + '&gender=' + this.gender + '&addresses=' + this.addresses + '&city=' + this.city + '&phone_number=' + this.phone_number + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/patients.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/patients.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/patients.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/patients.php?getById=' + this.id)); }catch(err){}}
  async getByFirst_name(){ try{ eval(await this.request('controller/patients.php?getByFirst_name=' + this.first_name)); }catch(err){}}
  async getByMiddle_name(){ try{ eval(await this.request('controller/patients.php?getByMiddle_name=' + this.middle_name)); }catch(err){}}
  async getByLast_name(){ try{ eval(await this.request('controller/patients.php?getByLast_name=' + this.last_name)); }catch(err){}}
  async getByUsername(){ try{ eval(await this.request('controller/patients.php?getByUsername=' + this.username)); }catch(err){}}
  async getByEmail(){ try{ eval(await this.request('controller/patients.php?getByEmail=' + this.email)); }catch(err){}}
  async getByPasswordd(){ try{ eval(await this.request('controller/patients.php?getByPasswordd=' + this.passwordd)); }catch(err){}}
  async getByImage_of_id(){ try{ eval(await this.request('controller/patients.php?getByImage_of_id=' + this.image_of_id)); }catch(err){}}
  async getByProfile_image(){ try{ eval(await this.request('controller/patients.php?getByProfile_image=' + this.profile_image)); }catch(err){}}
  async getByDate_of_birth(){ try{ eval(await this.request('controller/patients.php?getByDate_of_birth=' + this.date_of_birth)); }catch(err){}}
  async getByBlood_type(){ try{ eval(await this.request('controller/patients.php?getByBlood_type=' + this.blood_type)); }catch(err){}}
  async getByGender(){ try{ eval(await this.request('controller/patients.php?getByGender=' + this.gender)); }catch(err){}}
  async getByAddresses(){ try{ eval(await this.request('controller/patients.php?getByAddresses=' + this.addresses)); }catch(err){}}
  async getByCity(){ try{ eval(await this.request('controller/patients.php?getByCity=' + this.city)); }catch(err){}}
  async getByPhone_number(){ try{ eval(await this.request('controller/patients.php?getByPhone_number=' + this.phone_number)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/patients.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/patients.php?id=' + this.id + '&first_name=' + this.first_name + '&middle_name=' + this.middle_name + '&last_name=' + this.last_name + '&username=' + this.username + '&email=' + this.email + '&passwordd=' + this.passwordd + '&image_of_id=' + this.image_of_id + '&profile_image=' + this.profile_image + '&date_of_birth=' + this.date_of_birth + '&blood_type=' + this.blood_type + '&gender=' + this.gender + '&addresses=' + this.addresses + '&city=' + this.city + '&phone_number=' + this.phone_number + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/patients.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/patients.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/patients.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setFirst_name(first_name){ this.first_name = first_name; }
  setMiddle_name(middle_name){ this.middle_name = middle_name; }
  setLast_name(last_name){ this.last_name = last_name; }
  setUsername(username){ this.username = username; }
  setEmail(email){ this.email = email; }
  setPasswordd(passwordd){ this.passwordd = passwordd; }
  setImage_of_id(image_of_id){ this.image_of_id = image_of_id; }
  setProfile_image(profile_image){ this.profile_image = profile_image; }
  setDate_of_birth(date_of_birth){ this.date_of_birth = date_of_birth; }
  setBlood_type(blood_type){ this.blood_type = blood_type; }
  setGender(gender){ this.gender = gender; }
  setAddresses(addresses){ this.addresses = addresses; }
  setCity(city){ this.city = city; }
  setPhone_number(phone_number){ this.phone_number = phone_number; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getFirst_name(){ return this.first_name; }
  getMiddle_name(){ return this.middle_name; }
  getLast_name(){ return this.last_name; }
  getUsername(){ return this.username; }
  getEmail(){ return this.email; }
  getPasswordd(){ return this.passwordd; }
  getImage_of_id(){ return this.image_of_id; }
  getProfile_image(){ return this.profile_image; }
  getDate_of_birth(){ return this.date_of_birth; }
  getBlood_type(){ return this.blood_type; }
  getGender(){ return this.gender; }
  getAddresses(){ return this.addresses; }
  getCity(){ return this.city; }
  getPhone_number(){ return this.phone_number; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/patients.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
