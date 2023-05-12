class Logs_patients{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_user_id = ''
    this.new_first_name = ''
    this.new_middle_name = ''
    this.new_last_name = ''
    this.new_date_of_birth = ''
    this.new_gender = ''
    this.new_address = ''
    this.new_city = ''
    this.new_state = ''
    this.new_zip_code = ''
    this.new_phone_number = ''
    this.new_email = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_patients.php?id=' + this.id + '&actionn=' + this.actionn + '&new_user_id=' + this.new_user_id + '&new_first_name=' + this.new_first_name + '&new_middle_name=' + this.new_middle_name + '&new_last_name=' + this.new_last_name + '&new_date_of_birth=' + this.new_date_of_birth + '&new_gender=' + this.new_gender + '&new_address=' + this.new_address + '&new_city=' + this.new_city + '&new_state=' + this.new_state + '&new_zip_code=' + this.new_zip_code + '&new_phone_number=' + this.new_phone_number + '&new_email=' + this.new_email + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_patients.php?id=' + this.id + '&actionn=' + this.actionn + '&new_user_id=' + this.new_user_id + '&new_first_name=' + this.new_first_name + '&new_middle_name=' + this.new_middle_name + '&new_last_name=' + this.new_last_name + '&new_date_of_birth=' + this.new_date_of_birth + '&new_gender=' + this.new_gender + '&new_address=' + this.new_address + '&new_city=' + this.new_city + '&new_state=' + this.new_state + '&new_zip_code=' + this.new_zip_code + '&new_phone_number=' + this.new_phone_number + '&new_email=' + this.new_email + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_patients.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_patients.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_patients.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_patients.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_patients.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_user_id(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_user_id=' + this.new_user_id)); }catch(err){}}
  async getByNew_first_name(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_first_name=' + this.new_first_name)); }catch(err){}}
  async getByNew_middle_name(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_middle_name=' + this.new_middle_name)); }catch(err){}}
  async getByNew_last_name(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_last_name=' + this.new_last_name)); }catch(err){}}
  async getByNew_date_of_birth(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_date_of_birth=' + this.new_date_of_birth)); }catch(err){}}
  async getByNew_gender(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_gender=' + this.new_gender)); }catch(err){}}
  async getByNew_address(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_address=' + this.new_address)); }catch(err){}}
  async getByNew_city(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_city=' + this.new_city)); }catch(err){}}
  async getByNew_state(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_state=' + this.new_state)); }catch(err){}}
  async getByNew_zip_code(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_zip_code=' + this.new_zip_code)); }catch(err){}}
  async getByNew_phone_number(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_phone_number=' + this.new_phone_number)); }catch(err){}}
  async getByNew_email(){ try{ eval(await this.request('controller/logs_patients.php?getByNew_email=' + this.new_email)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_patients.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_patients.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_patients.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_patients.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_patients.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_patients.php?id=' + this.id + '&actionn=' + this.actionn + '&new_user_id=' + this.new_user_id + '&new_first_name=' + this.new_first_name + '&new_middle_name=' + this.new_middle_name + '&new_last_name=' + this.new_last_name + '&new_date_of_birth=' + this.new_date_of_birth + '&new_gender=' + this.new_gender + '&new_address=' + this.new_address + '&new_city=' + this.new_city + '&new_state=' + this.new_state + '&new_zip_code=' + this.new_zip_code + '&new_phone_number=' + this.new_phone_number + '&new_email=' + this.new_email + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_patients.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_patients.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_patients.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_user_id(new_user_id){ this.new_user_id = new_user_id; }
  setNew_first_name(new_first_name){ this.new_first_name = new_first_name; }
  setNew_middle_name(new_middle_name){ this.new_middle_name = new_middle_name; }
  setNew_last_name(new_last_name){ this.new_last_name = new_last_name; }
  setNew_date_of_birth(new_date_of_birth){ this.new_date_of_birth = new_date_of_birth; }
  setNew_gender(new_gender){ this.new_gender = new_gender; }
  setNew_address(new_address){ this.new_address = new_address; }
  setNew_city(new_city){ this.new_city = new_city; }
  setNew_state(new_state){ this.new_state = new_state; }
  setNew_zip_code(new_zip_code){ this.new_zip_code = new_zip_code; }
  setNew_phone_number(new_phone_number){ this.new_phone_number = new_phone_number; }
  setNew_email(new_email){ this.new_email = new_email; }
  setLogs_cdate(logs_cdate){ this.logs_cdate = logs_cdate; }
  setLogs_ctime(logs_ctime){ this.logs_ctime = logs_ctime; }
  setLog_ByUser(log_ByUser){ this.log_ByUser = log_ByUser; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getActionn(){ return this.actionn; }
  getNew_user_id(){ return this.new_user_id; }
  getNew_first_name(){ return this.new_first_name; }
  getNew_middle_name(){ return this.new_middle_name; }
  getNew_last_name(){ return this.new_last_name; }
  getNew_date_of_birth(){ return this.new_date_of_birth; }
  getNew_gender(){ return this.new_gender; }
  getNew_address(){ return this.new_address; }
  getNew_city(){ return this.new_city; }
  getNew_state(){ return this.new_state; }
  getNew_zip_code(){ return this.new_zip_code; }
  getNew_phone_number(){ return this.new_phone_number; }
  getNew_email(){ return this.new_email; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_patients.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
