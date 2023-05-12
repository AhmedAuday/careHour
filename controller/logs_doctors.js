class Logs_doctors{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_user_id = ''
    this.new_first_name = ''
    this.new_middle_name = ''
    this.new_last_name = ''
    this.new_email = ''
    this.new_phone = ''
    this.new_gender = ''
    this.new_dob = ''
    this.new_specialty = ''
    this.new_education = ''
    this.new_experience_years = ''
    this.new_start_office_hour = ''
    this.new_end_office_hour = ''
    this.new_bio = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_doctors.php?id=' + this.id + '&actionn=' + this.actionn + '&new_user_id=' + this.new_user_id + '&new_first_name=' + this.new_first_name + '&new_middle_name=' + this.new_middle_name + '&new_last_name=' + this.new_last_name + '&new_email=' + this.new_email + '&new_phone=' + this.new_phone + '&new_gender=' + this.new_gender + '&new_dob=' + this.new_dob + '&new_specialty=' + this.new_specialty + '&new_education=' + this.new_education + '&new_experience_years=' + this.new_experience_years + '&new_start_office_hour=' + this.new_start_office_hour + '&new_end_office_hour=' + this.new_end_office_hour + '&new_bio=' + this.new_bio + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_doctors.php?id=' + this.id + '&actionn=' + this.actionn + '&new_user_id=' + this.new_user_id + '&new_first_name=' + this.new_first_name + '&new_middle_name=' + this.new_middle_name + '&new_last_name=' + this.new_last_name + '&new_email=' + this.new_email + '&new_phone=' + this.new_phone + '&new_gender=' + this.new_gender + '&new_dob=' + this.new_dob + '&new_specialty=' + this.new_specialty + '&new_education=' + this.new_education + '&new_experience_years=' + this.new_experience_years + '&new_start_office_hour=' + this.new_start_office_hour + '&new_end_office_hour=' + this.new_end_office_hour + '&new_bio=' + this.new_bio + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_doctors.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_doctors.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_doctors.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_doctors.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_doctors.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_user_id(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_user_id=' + this.new_user_id)); }catch(err){}}
  async getByNew_first_name(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_first_name=' + this.new_first_name)); }catch(err){}}
  async getByNew_middle_name(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_middle_name=' + this.new_middle_name)); }catch(err){}}
  async getByNew_last_name(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_last_name=' + this.new_last_name)); }catch(err){}}
  async getByNew_email(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_email=' + this.new_email)); }catch(err){}}
  async getByNew_phone(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_phone=' + this.new_phone)); }catch(err){}}
  async getByNew_gender(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_gender=' + this.new_gender)); }catch(err){}}
  async getByNew_dob(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_dob=' + this.new_dob)); }catch(err){}}
  async getByNew_specialty(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_specialty=' + this.new_specialty)); }catch(err){}}
  async getByNew_education(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_education=' + this.new_education)); }catch(err){}}
  async getByNew_experience_years(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_experience_years=' + this.new_experience_years)); }catch(err){}}
  async getByNew_start_office_hour(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_start_office_hour=' + this.new_start_office_hour)); }catch(err){}}
  async getByNew_end_office_hour(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_end_office_hour=' + this.new_end_office_hour)); }catch(err){}}
  async getByNew_bio(){ try{ eval(await this.request('controller/logs_doctors.php?getByNew_bio=' + this.new_bio)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_doctors.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_doctors.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_doctors.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_doctors.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_doctors.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_doctors.php?id=' + this.id + '&actionn=' + this.actionn + '&new_user_id=' + this.new_user_id + '&new_first_name=' + this.new_first_name + '&new_middle_name=' + this.new_middle_name + '&new_last_name=' + this.new_last_name + '&new_email=' + this.new_email + '&new_phone=' + this.new_phone + '&new_gender=' + this.new_gender + '&new_dob=' + this.new_dob + '&new_specialty=' + this.new_specialty + '&new_education=' + this.new_education + '&new_experience_years=' + this.new_experience_years + '&new_start_office_hour=' + this.new_start_office_hour + '&new_end_office_hour=' + this.new_end_office_hour + '&new_bio=' + this.new_bio + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_doctors.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_doctors.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_doctors.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_user_id(new_user_id){ this.new_user_id = new_user_id; }
  setNew_first_name(new_first_name){ this.new_first_name = new_first_name; }
  setNew_middle_name(new_middle_name){ this.new_middle_name = new_middle_name; }
  setNew_last_name(new_last_name){ this.new_last_name = new_last_name; }
  setNew_email(new_email){ this.new_email = new_email; }
  setNew_phone(new_phone){ this.new_phone = new_phone; }
  setNew_gender(new_gender){ this.new_gender = new_gender; }
  setNew_dob(new_dob){ this.new_dob = new_dob; }
  setNew_specialty(new_specialty){ this.new_specialty = new_specialty; }
  setNew_education(new_education){ this.new_education = new_education; }
  setNew_experience_years(new_experience_years){ this.new_experience_years = new_experience_years; }
  setNew_start_office_hour(new_start_office_hour){ this.new_start_office_hour = new_start_office_hour; }
  setNew_end_office_hour(new_end_office_hour){ this.new_end_office_hour = new_end_office_hour; }
  setNew_bio(new_bio){ this.new_bio = new_bio; }
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
  getNew_email(){ return this.new_email; }
  getNew_phone(){ return this.new_phone; }
  getNew_gender(){ return this.new_gender; }
  getNew_dob(){ return this.new_dob; }
  getNew_specialty(){ return this.new_specialty; }
  getNew_education(){ return this.new_education; }
  getNew_experience_years(){ return this.new_experience_years; }
  getNew_start_office_hour(){ return this.new_start_office_hour; }
  getNew_end_office_hour(){ return this.new_end_office_hour; }
  getNew_bio(){ return this.new_bio; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_doctors.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
