class Doctors{

  constructor(){
    this.id = ''
    this.user_id = ''
    this.first_name = ''
    this.middle_name = ''
    this.last_name = ''
    this.username = ''
    this.email = ''
    this.passwordd = ''
    this.created_at = ''
    this.phone = ''
    this.image_of_id = ''
    this.profile_image = ''
    this.gender = ''
    this.dob = ''
    this.specialty = ''
    this.addresses = ''
    this.education = ''
    this.experience_years = ''
    this.start_office_hour = ''
    this.end_office_hour = ''
    this.bio = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/doctors.php?id=' + this.id + '&user_id=' + this.user_id + '&first_name=' + this.first_name + '&middle_name=' + this.middle_name + '&last_name=' + this.last_name + '&username=' + this.username + '&email=' + this.email + '&passwordd=' + this.passwordd + '&created_at=' + this.created_at + '&phone=' + this.phone + '&image_of_id=' + this.image_of_id + '&profile_image=' + this.profile_image + '&gender=' + this.gender + '&dob=' + this.dob + '&specialty=' + this.specialty + '&addresses=' + this.addresses + '&education=' + this.education + '&experience_years=' + this.experience_years + '&start_office_hour=' + this.start_office_hour + '&end_office_hour=' + this.end_office_hour + '&bio=' + this.bio + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/doctors.php?id=' + this.id + '&user_id=' + this.user_id + '&first_name=' + this.first_name + '&middle_name=' + this.middle_name + '&last_name=' + this.last_name + '&username=' + this.username + '&email=' + this.email + '&passwordd=' + this.passwordd + '&created_at=' + this.created_at + '&phone=' + this.phone + '&image_of_id=' + this.image_of_id + '&profile_image=' + this.profile_image + '&gender=' + this.gender + '&dob=' + this.dob + '&specialty=' + this.specialty + '&addresses=' + this.addresses + '&education=' + this.education + '&experience_years=' + this.experience_years + '&start_office_hour=' + this.start_office_hour + '&end_office_hour=' + this.end_office_hour + '&bio=' + this.bio + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/doctors.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/doctors.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/doctors.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/doctors.php?getById=' + this.id)); }catch(err){}}
  async getByUser_id(){ try{ eval(await this.request('controller/doctors.php?getByUser_id=' + this.user_id)); }catch(err){}}
  async getByFirst_name(){ try{ eval(await this.request('controller/doctors.php?getByFirst_name=' + this.first_name)); }catch(err){}}
  async getByMiddle_name(){ try{ eval(await this.request('controller/doctors.php?getByMiddle_name=' + this.middle_name)); }catch(err){}}
  async getByLast_name(){ try{ eval(await this.request('controller/doctors.php?getByLast_name=' + this.last_name)); }catch(err){}}
  async getByUsername(){ try{ eval(await this.request('controller/doctors.php?getByUsername=' + this.username)); }catch(err){}}
  async getByEmail(){ try{ eval(await this.request('controller/doctors.php?getByEmail=' + this.email)); }catch(err){}}
  async getByPasswordd(){ try{ eval(await this.request('controller/doctors.php?getByPasswordd=' + this.passwordd)); }catch(err){}}
  async getByCreated_at(){ try{ eval(await this.request('controller/doctors.php?getByCreated_at=' + this.created_at)); }catch(err){}}
  async getByPhone(){ try{ eval(await this.request('controller/doctors.php?getByPhone=' + this.phone)); }catch(err){}}
  async getByImage_of_id(){ try{ eval(await this.request('controller/doctors.php?getByImage_of_id=' + this.image_of_id)); }catch(err){}}
  async getByProfile_image(){ try{ eval(await this.request('controller/doctors.php?getByProfile_image=' + this.profile_image)); }catch(err){}}
  async getByGender(){ try{ eval(await this.request('controller/doctors.php?getByGender=' + this.gender)); }catch(err){}}
  async getByDob(){ try{ eval(await this.request('controller/doctors.php?getByDob=' + this.dob)); }catch(err){}}
  async getBySpecialty(){ try{ eval(await this.request('controller/doctors.php?getBySpecialty=' + this.specialty)); }catch(err){}}
  async getByAddresses(){ try{ eval(await this.request('controller/doctors.php?getByAddresses=' + this.addresses)); }catch(err){}}
  async getByEducation(){ try{ eval(await this.request('controller/doctors.php?getByEducation=' + this.education)); }catch(err){}}
  async getByExperience_years(){ try{ eval(await this.request('controller/doctors.php?getByExperience_years=' + this.experience_years)); }catch(err){}}
  async getByStart_office_hour(){ try{ eval(await this.request('controller/doctors.php?getByStart_office_hour=' + this.start_office_hour)); }catch(err){}}
  async getByEnd_office_hour(){ try{ eval(await this.request('controller/doctors.php?getByEnd_office_hour=' + this.end_office_hour)); }catch(err){}}
  async getByBio(){ try{ eval(await this.request('controller/doctors.php?getByBio=' + this.bio)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/doctors.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/doctors.php?id=' + this.id + '&user_id=' + this.user_id + '&first_name=' + this.first_name + '&middle_name=' + this.middle_name + '&last_name=' + this.last_name + '&username=' + this.username + '&email=' + this.email + '&passwordd=' + this.passwordd + '&created_at=' + this.created_at + '&phone=' + this.phone + '&image_of_id=' + this.image_of_id + '&profile_image=' + this.profile_image + '&gender=' + this.gender + '&dob=' + this.dob + '&specialty=' + this.specialty + '&addresses=' + this.addresses + '&education=' + this.education + '&experience_years=' + this.experience_years + '&start_office_hour=' + this.start_office_hour + '&end_office_hour=' + this.end_office_hour + '&bio=' + this.bio + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/doctors.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/doctors.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/doctors.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setUser_id(user_id){ this.user_id = user_id; }
  setFirst_name(first_name){ this.first_name = first_name; }
  setMiddle_name(middle_name){ this.middle_name = middle_name; }
  setLast_name(last_name){ this.last_name = last_name; }
  setUsername(username){ this.username = username; }
  setEmail(email){ this.email = email; }
  setPasswordd(passwordd){ this.passwordd = passwordd; }
  setCreated_at(created_at){ this.created_at = created_at; }
  setPhone(phone){ this.phone = phone; }
  setImage_of_id(image_of_id){ this.image_of_id = image_of_id; }
  setProfile_image(profile_image){ this.profile_image = profile_image; }
  setGender(gender){ this.gender = gender; }
  setDob(dob){ this.dob = dob; }
  setSpecialty(specialty){ this.specialty = specialty; }
  setAddresses(addresses){ this.addresses = addresses; }
  setEducation(education){ this.education = education; }
  setExperience_years(experience_years){ this.experience_years = experience_years; }
  setStart_office_hour(start_office_hour){ this.start_office_hour = start_office_hour; }
  setEnd_office_hour(end_office_hour){ this.end_office_hour = end_office_hour; }
  setBio(bio){ this.bio = bio; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getUser_id(){ return this.user_id; }
  getFirst_name(){ return this.first_name; }
  getMiddle_name(){ return this.middle_name; }
  getLast_name(){ return this.last_name; }
  getUsername(){ return this.username; }
  getEmail(){ return this.email; }
  getPasswordd(){ return this.passwordd; }
  getCreated_at(){ return this.created_at; }
  getPhone(){ return this.phone; }
  getImage_of_id(){ return this.image_of_id; }
  getProfile_image(){ return this.profile_image; }
  getGender(){ return this.gender; }
  getDob(){ return this.dob; }
  getSpecialty(){ return this.specialty; }
  getAddresses(){ return this.addresses; }
  getEducation(){ return this.education; }
  getExperience_years(){ return this.experience_years; }
  getStart_office_hour(){ return this.start_office_hour; }
  getEnd_office_hour(){ return this.end_office_hour; }
  getBio(){ return this.bio; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/doctors.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
