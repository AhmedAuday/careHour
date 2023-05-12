class Patients{

  constructor(){
    this.id = ''
    this.user_id = ''
    this.first_name = ''
    this.middle_name = ''
    this.last_name = ''
    this.date_of_birth = ''
    this.gender = ''
    this.address = ''
    this.city = ''
    this.zip_code = ''
    this.phone_number = ''
    this.email = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/patients.php?id=' + this.id + '&user_id=' + this.user_id + '&first_name=' + this.first_name + '&middle_name=' + this.middle_name + '&last_name=' + this.last_name + '&date_of_birth=' + this.date_of_birth + '&gender=' + this.gender + '&address=' + this.address + '&city=' + this.city + '&zip_code=' + this.zip_code + '&phone_number=' + this.phone_number + '&email=' + this.email + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/patients.php?id=' + this.id + '&user_id=' + this.user_id + '&first_name=' + this.first_name + '&middle_name=' + this.middle_name + '&last_name=' + this.last_name + '&date_of_birth=' + this.date_of_birth + '&gender=' + this.gender + '&address=' + this.address + '&city=' + this.city + '&zip_code=' + this.zip_code + '&phone_number=' + this.phone_number + '&email=' + this.email + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/patients.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/patients.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/patients.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/patients.php?getById=' + this.id)); }catch(err){}}
  async getByUser_id(){ try{ eval(await this.request('controller/patients.php?getByUser_id=' + this.user_id)); }catch(err){}}
  async getByFirst_name(){ try{ eval(await this.request('controller/patients.php?getByFirst_name=' + this.first_name)); }catch(err){}}
  async getByMiddle_name(){ try{ eval(await this.request('controller/patients.php?getByMiddle_name=' + this.middle_name)); }catch(err){}}
  async getByLast_name(){ try{ eval(await this.request('controller/patients.php?getByLast_name=' + this.last_name)); }catch(err){}}
  async getByDate_of_birth(){ try{ eval(await this.request('controller/patients.php?getByDate_of_birth=' + this.date_of_birth)); }catch(err){}}
  async getByGender(){ try{ eval(await this.request('controller/patients.php?getByGender=' + this.gender)); }catch(err){}}
  async getByAddress(){ try{ eval(await this.request('controller/patients.php?getByAddress=' + this.address)); }catch(err){}}
  async getByCity(){ try{ eval(await this.request('controller/patients.php?getByCity=' + this.city)); }catch(err){}}
  async getByZip_code(){ try{ eval(await this.request('controller/patients.php?getByZip_code=' + this.zip_code)); }catch(err){}}
  async getByPhone_number(){ try{ eval(await this.request('controller/patients.php?getByPhone_number=' + this.phone_number)); }catch(err){}}
  async getByEmail(){ try{ eval(await this.request('controller/patients.php?getByEmail=' + this.email)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/patients.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/patients.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/patients.php?id=' + this.id + '&user_id=' + this.user_id + '&first_name=' + this.first_name + '&middle_name=' + this.middle_name + '&last_name=' + this.last_name + '&date_of_birth=' + this.date_of_birth + '&gender=' + this.gender + '&address=' + this.address + '&city=' + this.city + '&zip_code=' + this.zip_code + '&phone_number=' + this.phone_number + '&email=' + this.email + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/patients.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/patients.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/patients.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setUser_id(user_id){ this.user_id = user_id; }
  setFirst_name(first_name){ this.first_name = first_name; }
  setMiddle_name(middle_name){ this.middle_name = middle_name; }
  setLast_name(last_name){ this.last_name = last_name; }
  setDate_of_birth(date_of_birth){ this.date_of_birth = date_of_birth; }
  setGender(gender){ this.gender = gender; }
  setAddress(address){ this.address = address; }
  setCity(city){ this.city = city; }
  setZip_code(zip_code){ this.zip_code = zip_code; }
  setPhone_number(phone_number){ this.phone_number = phone_number; }
  setEmail(email){ this.email = email; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getUser_id(){ return this.user_id; }
  getFirst_name(){ return this.first_name; }
  getMiddle_name(){ return this.middle_name; }
  getLast_name(){ return this.last_name; }
  getDate_of_birth(){ return this.date_of_birth; }
  getGender(){ return this.gender; }
  getAddress(){ return this.address; }
  getCity(){ return this.city; }
  getZip_code(){ return this.zip_code; }
  getPhone_number(){ return this.phone_number; }
  getEmail(){ return this.email; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/patients.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
