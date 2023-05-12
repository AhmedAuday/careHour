class Logs_vitals{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_patient_id = ''
    this.new_date_time = ''
    this.new_temperature = ''
    this.new_blood_pressure = ''
    this.new_heart_rate = ''
    this.new_respiratory_rate = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_vitals.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_date_time=' + this.new_date_time + '&new_temperature=' + this.new_temperature + '&new_blood_pressure=' + this.new_blood_pressure + '&new_heart_rate=' + this.new_heart_rate + '&new_respiratory_rate=' + this.new_respiratory_rate + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_vitals.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_date_time=' + this.new_date_time + '&new_temperature=' + this.new_temperature + '&new_blood_pressure=' + this.new_blood_pressure + '&new_heart_rate=' + this.new_heart_rate + '&new_respiratory_rate=' + this.new_respiratory_rate + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_vitals.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_vitals.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_vitals.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_vitals.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_vitals.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_patient_id(){ try{ eval(await this.request('controller/logs_vitals.php?getByNew_patient_id=' + this.new_patient_id)); }catch(err){}}
  async getByNew_date_time(){ try{ eval(await this.request('controller/logs_vitals.php?getByNew_date_time=' + this.new_date_time)); }catch(err){}}
  async getByNew_temperature(){ try{ eval(await this.request('controller/logs_vitals.php?getByNew_temperature=' + this.new_temperature)); }catch(err){}}
  async getByNew_blood_pressure(){ try{ eval(await this.request('controller/logs_vitals.php?getByNew_blood_pressure=' + this.new_blood_pressure)); }catch(err){}}
  async getByNew_heart_rate(){ try{ eval(await this.request('controller/logs_vitals.php?getByNew_heart_rate=' + this.new_heart_rate)); }catch(err){}}
  async getByNew_respiratory_rate(){ try{ eval(await this.request('controller/logs_vitals.php?getByNew_respiratory_rate=' + this.new_respiratory_rate)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_vitals.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_vitals.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_vitals.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_vitals.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_vitals.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_vitals.php?id=' + this.id + '&actionn=' + this.actionn + '&new_patient_id=' + this.new_patient_id + '&new_date_time=' + this.new_date_time + '&new_temperature=' + this.new_temperature + '&new_blood_pressure=' + this.new_blood_pressure + '&new_heart_rate=' + this.new_heart_rate + '&new_respiratory_rate=' + this.new_respiratory_rate + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_vitals.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_vitals.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_vitals.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_patient_id(new_patient_id){ this.new_patient_id = new_patient_id; }
  setNew_date_time(new_date_time){ this.new_date_time = new_date_time; }
  setNew_temperature(new_temperature){ this.new_temperature = new_temperature; }
  setNew_blood_pressure(new_blood_pressure){ this.new_blood_pressure = new_blood_pressure; }
  setNew_heart_rate(new_heart_rate){ this.new_heart_rate = new_heart_rate; }
  setNew_respiratory_rate(new_respiratory_rate){ this.new_respiratory_rate = new_respiratory_rate; }
  setLogs_cdate(logs_cdate){ this.logs_cdate = logs_cdate; }
  setLogs_ctime(logs_ctime){ this.logs_ctime = logs_ctime; }
  setLog_ByUser(log_ByUser){ this.log_ByUser = log_ByUser; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getActionn(){ return this.actionn; }
  getNew_patient_id(){ return this.new_patient_id; }
  getNew_date_time(){ return this.new_date_time; }
  getNew_temperature(){ return this.new_temperature; }
  getNew_blood_pressure(){ return this.new_blood_pressure; }
  getNew_heart_rate(){ return this.new_heart_rate; }
  getNew_respiratory_rate(){ return this.new_respiratory_rate; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_vitals.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
