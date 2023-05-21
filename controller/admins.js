class Admins{

  constructor(){
    this.id = ''
    this.username = ''
    this.email = ''
    this.image_of_id = ''
    this.passwordd = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/admins.php?id=' + this.id + '&username=' + this.username + '&email=' + this.email + '&image_of_id=' + this.image_of_id + '&passwordd=' + this.passwordd + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/admins.php?id=' + this.id + '&username=' + this.username + '&email=' + this.email + '&image_of_id=' + this.image_of_id + '&passwordd=' + this.passwordd + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/admins.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/admins.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/admins.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/admins.php?getById=' + this.id)); }catch(err){}}
  async getByUsername(){ try{ eval(await this.request('controller/admins.php?getByUsername=' + this.username)); }catch(err){}}
  async getByEmail(){ try{ eval(await this.request('controller/admins.php?getByEmail=' + this.email)); }catch(err){}}
  async getByImage_of_id(){ try{ eval(await this.request('controller/admins.php?getByImage_of_id=' + this.image_of_id)); }catch(err){}}
  async getByPasswordd(){ try{ eval(await this.request('controller/admins.php?getByPasswordd=' + this.passwordd)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/admins.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/admins.php?id=' + this.id + '&username=' + this.username + '&email=' + this.email + '&image_of_id=' + this.image_of_id + '&passwordd=' + this.passwordd + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/admins.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/admins.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/admins.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setUsername(username){ this.username = username; }
  setEmail(email){ this.email = email; }
  setImage_of_id(image_of_id){ this.image_of_id = image_of_id; }
  setPasswordd(passwordd){ this.passwordd = passwordd; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getUsername(){ return this.username; }
  getEmail(){ return this.email; }
  getImage_of_id(){ return this.image_of_id; }
  getPasswordd(){ return this.passwordd; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/admins.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
