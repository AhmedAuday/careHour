class Patient_user{

  constructor(){
    this.id = ''
    this.username = ''
    this.email = ''
    this.passwordd = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/patient_user.php?id=' + this.id + '&username=' + this.username + '&email=' + this.email + '&passwordd=' + this.passwordd + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/patient_user.php?id=' + this.id + '&username=' + this.username + '&email=' + this.email + '&passwordd=' + this.passwordd + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/patient_user.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/patient_user.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/patient_user.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/patient_user.php?getById=' + this.id)); }catch(err){}}
  async getByUsername(){ try{ eval(await this.request('controller/patient_user.php?getByUsername=' + this.username)); }catch(err){}}
  async getByEmail(){ try{ eval(await this.request('controller/patient_user.php?getByEmail=' + this.email)); }catch(err){}}
  async getByPasswordd(){ try{ eval(await this.request('controller/patient_user.php?getByPasswordd=' + this.passwordd)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/patient_user.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/patient_user.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/patient_user.php?id=' + this.id + '&username=' + this.username + '&email=' + this.email + '&passwordd=' + this.passwordd + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/patient_user.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/patient_user.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/patient_user.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setUsername(username){ this.username = username; }
  setEmail(email){ this.email = email; }
  setPasswordd(passwordd){ this.passwordd = passwordd; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getUsername(){ return this.username; }
  getEmail(){ return this.email; }
  getPasswordd(){ return this.passwordd; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/patient_user.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
